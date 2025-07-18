<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateCollectionDataMetadataShrinkRequest extends Model
{
    /**
     * @description Collection name.
     *
     * > You can use the [ListCollections](https://help.aliyun.com/document_detail/2401503.html) API to view the list.
     *
     * This parameter is required.
     *
     * @example document
     *
     * @var string
     */
    public $collection;

    /**
     * @description Instance ID.
     *
     * > You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/86911.html) API to view details of all AnalyticDB for PostgreSQL instances in the target region, including the instance ID.
     *
     * @example gp-j788ghhjjxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Filter condition for the data to be updated, in SQL WHERE format. This field cannot be empty at the same time as the Ids field.
     *
     * @example business_value = \\"chat_file_1\\"
     *
     * @var string
     */
    public $filter;

    /**
     * @description ID list of the data to be updated, i.e., the Row.Id specified when uploading the data. This field cannot be empty at the same time as the Filter field.
     *
     * @var string
     */
    public $idsShrink;

    /**
     * @description Data to be updated, in a JSON string of MAP format. The key is the field name, and the value is the new data value.
     *
     * This parameter is required.
     *
     * @example {
     * "title": "new title",
     * "content": "new content"
     * }
     *
     * @var string
     */
    public $metadataShrink;

    /**
     * @description Namespace.
     *
     * > You can use the [ListNamespaces](https://help.aliyun.com/document_detail/2401502.html) API to view the list.
     *
     * @example mynamespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description Password corresponding to the namespace.
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
     * @description Region ID where the instance is located.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description ID of the Workspace composed of multiple database instances. This parameter and the DBInstanceId parameter cannot both be empty. When both are specified, this parameter takes precedence.
     *
     * @example gp-ws-*****
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'collection' => 'Collection',
        'DBInstanceId' => 'DBInstanceId',
        'filter' => 'Filter',
        'idsShrink' => 'Ids',
        'metadataShrink' => 'Metadata',
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
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->idsShrink) {
            $res['Ids'] = $this->idsShrink;
        }
        if (null !== $this->metadataShrink) {
            $res['Metadata'] = $this->metadataShrink;
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
     * @return UpdateCollectionDataMetadataShrinkRequest
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
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['Ids'])) {
            $model->idsShrink = $map['Ids'];
        }
        if (isset($map['Metadata'])) {
            $model->metadataShrink = $map['Metadata'];
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
