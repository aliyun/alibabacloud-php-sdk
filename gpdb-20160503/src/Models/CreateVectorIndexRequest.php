<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CreateVectorIndexRequest extends Model
{
    /**
     * @var string
     */
    public $collection;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var int
     */
    public $dimension;
    /**
     * @var int
     */
    public $externalStorage;
    /**
     * @var int
     */
    public $hnswEfConstruction;
    /**
     * @var int
     */
    public $hnswM;
    /**
     * @var string
     */
    public $managerAccount;
    /**
     * @var string
     */
    public $managerAccountPassword;
    /**
     * @var string
     */
    public $metrics;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var int
     */
    public $pqEnable;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'             => 'Collection',
        'DBInstanceId'           => 'DBInstanceId',
        'dimension'              => 'Dimension',
        'externalStorage'        => 'ExternalStorage',
        'hnswEfConstruction'     => 'HnswEfConstruction',
        'hnswM'                  => 'HnswM',
        'managerAccount'         => 'ManagerAccount',
        'managerAccountPassword' => 'ManagerAccountPassword',
        'metrics'                => 'Metrics',
        'namespace'              => 'Namespace',
        'ownerId'                => 'OwnerId',
        'pqEnable'               => 'PqEnable',
        'regionId'               => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }

        if (null !== $this->externalStorage) {
            $res['ExternalStorage'] = $this->externalStorage;
        }

        if (null !== $this->hnswEfConstruction) {
            $res['HnswEfConstruction'] = $this->hnswEfConstruction;
        }

        if (null !== $this->hnswM) {
            $res['HnswM'] = $this->hnswM;
        }

        if (null !== $this->managerAccount) {
            $res['ManagerAccount'] = $this->managerAccount;
        }

        if (null !== $this->managerAccountPassword) {
            $res['ManagerAccountPassword'] = $this->managerAccountPassword;
        }

        if (null !== $this->metrics) {
            $res['Metrics'] = $this->metrics;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->pqEnable) {
            $res['PqEnable'] = $this->pqEnable;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }

        if (isset($map['ExternalStorage'])) {
            $model->externalStorage = $map['ExternalStorage'];
        }

        if (isset($map['HnswEfConstruction'])) {
            $model->hnswEfConstruction = $map['HnswEfConstruction'];
        }

        if (isset($map['HnswM'])) {
            $model->hnswM = $map['HnswM'];
        }

        if (isset($map['ManagerAccount'])) {
            $model->managerAccount = $map['ManagerAccount'];
        }

        if (isset($map['ManagerAccountPassword'])) {
            $model->managerAccountPassword = $map['ManagerAccountPassword'];
        }

        if (isset($map['Metrics'])) {
            $model->metrics = $map['Metrics'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PqEnable'])) {
            $model->pqEnable = $map['PqEnable'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
