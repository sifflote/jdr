<?php

namespace App\Controller\Admin\DH;

use App\Entity\DH\DhTrait;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DhTraitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DhTrait::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Trait')
            ->setEntityLabelInSingular('Traits')

            ->setPageTitle('index', 'Dark Heresy - Traits')
            ->setPaginatorPageSize(50)
            ;// TODO: Change the autogenerated stub
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('name'),
            TextField::new('avantage'),
            TextField::new('inconvenient'),
            TextareaField::new('description')->hideOnIndex(),
        ];
    }
}