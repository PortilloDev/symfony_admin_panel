<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
                ->setEntityLabelInSingular('Publicación')
                ->setEntityLabelInPlural('Publicaciones')
                ->setSearchFields(['title', 'content']) //configuración campo de busqueda
                ->setDefaultSort(['id'=> 'DESC']); //ordenación
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            AssociationField::new('category', 'Categoría'),
            AssociationField::new('user', 'Usuario'),
            TextField::new('title', 'Titulo'),
            SlugField::new('slug')->setTargetFieldName('title'),
            TextEditorField::new('content', 'Contenido')->hideOnIndex(),
        ];
    }

}
