<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DeleteCollectionDataRequest extends Model
{
    /**
     * @description The name of the collection.
     *
     * This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description The data that you want to delete.
     *
     * @example {"title":["a","b"]}
     *
     * @var string
     */
    public $collectionData;

    /**
     * @description The filter conditions for the data to be deleted.
     *
     * @example a < 10
     *
     * @var string
     */
    public $collectionDataFilter;

    /**
     * @description The instance ID.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) operation to query the IDs of all AnalyticDB for PostgreSQL instances within a region.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The name of the namespace. Default value: public.
     *
     * >  You can call the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) operation to query a list of namespaces.
     *
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The password of the namespace.
     *
     * This parameter is required.
     *
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
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/86912.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the workspace that consists of multiple AnalyticDB for PostgreSQL instances. You must specify one of the WorkspaceId and DBInstanceId parameters. If you specify both parameters, the WorkspaceId parameter takes effect.
     *
     * @example gp-ws-*****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collection' => 'Collection',
        'collectionData' => 'CollectionData',
        'collectionDataFilter' => 'CollectionDataFilter',
        'DBInstanceId' => 'DBInstanceId',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }
        if (null !== $this->collectionData) {
            $res['CollectionData'] = $this->collectionData;
        }
        if (null !== $this->collectionDataFilter) {
            $res['CollectionDataFilter'] = $this->collectionDataFilter;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
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
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCollectionDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }
        if (isset($map['CollectionData'])) {
            $model->collectionData = $map['CollectionData'];
        }
        if (isset($map['CollectionDataFilter'])) {
            $model->collectionDataFilter = $map['CollectionDataFilter'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
