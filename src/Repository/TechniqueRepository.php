<?php

namespace App\Repository;

use App\Entity\Technique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Technique>
 *
 * @method Technique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Technique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Technique[]    findAll()
 * @method Technique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TechniqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Technique::class);
    }

    //    /**
    //     * @return Technique[] Returns an array of Technique objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Technique
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
