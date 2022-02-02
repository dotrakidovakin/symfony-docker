<?php

namespace App\Repository;

use App\Entity\MyTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MyTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyTest[]    findAll()
 * @method MyTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MyTest::class);
    }

    // /**
    //  * @return MyTest[] Returns an array of MyTest objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MyTest
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
