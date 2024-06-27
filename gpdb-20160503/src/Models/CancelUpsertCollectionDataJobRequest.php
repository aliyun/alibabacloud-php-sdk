<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CancelUpsertCollectionDataJobRequest extends Model
{
    /**
     * @description The name of the collection.
     *
     * This parameter is required.
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the vector data upload job. You can call the `UpsertCollectionDataAsync` operation to query the job ID.
     *
     * This parameter is required.
     * @example bf8f7bc4-9276-44f7-9c22-1d06edc8dfd1
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the namespace. Default value: public.
     *
     * >  You can call the CreateNamespace operation to create a namespace and call the ListNamespaces operation to query a list of namespaces.
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The password of the namespace.
     *
     * This parameter is required.
     * @example testpassword
     *
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the instance.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'collection'        => 'Collection',
        'DBInstanceId'      => 'DBInstanceId',
        'jobId'             => 'JobId',
        'namespace'         => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId'           => 'OwnerId',
        'regionId'          => 'RegionId',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelUpsertCollectionDataJobRequest
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
