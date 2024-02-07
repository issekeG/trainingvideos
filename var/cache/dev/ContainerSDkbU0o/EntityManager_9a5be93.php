<?php

namespace ContainerSDkbU0o;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder14710 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera4876 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f7bf = [
        
    ];

    public function getConnection()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getConnection', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getMetadataFactory', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getExpressionBuilder', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'beginTransaction', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getCache', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getCache();
    }

    public function transactional($func)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'transactional', array('func' => $func), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'wrapInTransaction', array('func' => $func), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'commit', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->commit();
    }

    public function rollback()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'rollback', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getClassMetadata', array('className' => $className), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'createQuery', array('dql' => $dql), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'createNamedQuery', array('name' => $name), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'createQueryBuilder', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'flush', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'clear', array('entityName' => $entityName), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->clear($entityName);
    }

    public function close()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'close', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->close();
    }

    public function persist($entity)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'persist', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'remove', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'detach', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'merge', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getRepository', array('entityName' => $entityName), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'contains', array('entity' => $entity), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getEventManager', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getConfiguration', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'isOpen', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getUnitOfWork', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getProxyFactory', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'initializeObject', array('obj' => $obj), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'getFilters', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'isFiltersStateClean', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'hasFilters', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return $this->valueHolder14710->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera4876 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder14710) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder14710 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder14710->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__get', ['name' => $name], $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        if (isset(self::$publicProperties7f7bf[$name])) {
            return $this->valueHolder14710->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14710;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14710;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14710;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder14710;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__isset', array('name' => $name), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14710;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder14710;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__unset', array('name' => $name), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder14710;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder14710;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__clone', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        $this->valueHolder14710 = clone $this->valueHolder14710;
    }

    public function __sleep()
    {
        $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, '__sleep', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;

        return array('valueHolder14710');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera4876 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera4876;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera4876 && ($this->initializera4876->__invoke($valueHolder14710, $this, 'initializeProxy', array(), $this->initializera4876) || 1) && $this->valueHolder14710 = $valueHolder14710;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder14710;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder14710;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
