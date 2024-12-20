<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CreateVectorIndexRequest extends Model
{
    /**
     * @description Collection name.
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Vector dimension.
     * This parameter is required.
     * @example 1024
     *
     * @var int
     */
    public $dimension;

    /**
     * @description Whether to use mmap to build the HNSW index, default is 0. If the data does not need to be deleted and there are performance requirements for uploading data, it is recommended to set this to 1.
     *
     * > - When set to 1, the index is built using mmap, which does not support deletion and update operations.
     * @example 0
     *
     * @var int
     */
    public $externalStorage;

    /**
     * @description The maximum number of neighbors in the HNSW algorithm, ranging from 1 to 1000. The API will automatically set this value based on the vector dimension, and it generally does not need to be manually set.
     *
     * > - Greater than 1024: 128
     * @example 64
     *
     * @var int
     */
    public $hnswM;

    /**
     * @description Name of the management account with rds_superuser permissions.
     *
     * This parameter is required.
     * @example testaccount
     *
     * @var string
     */
    public $managerAccount;

    /**
     * @description Management account password.
     *
     * This parameter is required.
     * @example testpassword
     *
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @description Method used for building the vector index. Value description:
     * - cosine: Cosine similarity.
     * @example cosine
     *
     * @var string
     */
    public $metrics;

    /**
     * @description Namespace, default is public.
     *
     * > You can use the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API to view the list.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description Whether to enable PQ (Product Quantization) algorithm acceleration for the index. It is recommended to enable this when the data volume exceeds 500,000. Value description:
     * - 1: Enabled (default).
     * @example 1
     *
     * @var int
     */
    public $pqEnable;

    /**
     * @description Region ID where the instance is located.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'             => 'Collection',
        'DBInstanceId'           => 'DBInstanceId',
        'dimension'              => 'Dimension',
        'externalStorage'        => 'ExternalStorage',
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateVectorIndexRequest
     */
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
