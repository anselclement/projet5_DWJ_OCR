<?php

namespace App\Repository;

use App\Entity\Experiences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Experiences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experiences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experiences[]    findAll()
 * @method Experiences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperiencesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Experiences::class);
    }

    // /**
    //  * @return Experiences[] Returns an array of Experiences objects
    //  */
    public function findDateDebutDesc()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.DateDebut', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Experiences
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
