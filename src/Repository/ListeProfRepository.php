<?php

namespace App\Repository;

use App\Entity\ListeProf;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeProf|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeProf|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeProf[]    findAll()
 * @method ListeProf[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeProfRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeProf::class);
    }

    // /**
    //  * @return ListeProf[] Returns an array of ListeProf objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeProf
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
