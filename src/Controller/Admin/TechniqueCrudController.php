<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\Technique;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TechniqueCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Technique::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        
            ->setEntityLabelInSingular("technique")
            ->setEntityLabelInPlural("Les techniques");
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('key')
            ->setLabel('valeur')
            ->setHelp(''),

            TextField::new('display_name')
                ->setLabel('')
                ->setHelp(''),

            BooleanField::new('is_default')
                ->setLabel('')
                ->setHelp('vrai ou faux'),

            ArrayField::new('product','Product')
                ->setLabel('')
                ->setHelp(''),
        ];
    }
}
