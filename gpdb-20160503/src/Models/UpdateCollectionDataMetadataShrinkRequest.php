<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class UpdateCollectionDataMetadataShrinkRequest extends Model
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
     * @description The condition that is used to filter the data to be updated. Specify this parameter in a format that is the same as the WHERE clause. You cannot leave both this parameter and Ids empty.
     *
     * @example business_value = \\"chat_file_1\\"
     *
     * @var string
     */
    public $filter;

    /**
     * @description The row IDs of the data to be updated. You cannot leave both this parameter and Filter empty.
     *
     * @var string
     */
    public $idsShrink;

    /**
     * @description The data to be updated, which is a JSON string in the MAP format. In the JSON string, key specifies the field name and value specifies the new data value.
     *
     * This parameter is required.
     * @example {
     * }
     * @var string
     */
    public $metadataShrink;

    /**
     * @description The name of the namespace.
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
     * @description The region ID.
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
        'filter'            => 'Filter',
        'idsShrink'         => 'Ids',
        'metadataShrink'    => 'Metadata',
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

        return $model;
    }
}
