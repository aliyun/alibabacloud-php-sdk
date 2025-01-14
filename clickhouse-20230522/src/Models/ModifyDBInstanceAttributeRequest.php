<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBInstanceAttributeRequest extends Model
{
    /**
     * @description The configuration that you want to modify.
     *
     *   MaintainTime: the O\\&M time
     *   DBInstanceDescription: the cluster name
     *
     * This parameter is required.
     * @example DBInstanceDescription
     *
     * @var string
     */
    public $attributeType;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $attributeValue;

    /**
     * @description This parameter is required.
     *
     * @example cc-xxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The code of the cloud service.
     *
     * @example clickhouse
     *
     * @var string
     */
    public $product;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'attributeType'  => 'AttributeType',
        'attributeValue' => 'AttributeValue',
        'DBInstanceId'   => 'DBInstanceId',
        'product'        => 'Product',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeType) {
            $res['AttributeType'] = $this->attributeType;
        }
        if (null !== $this->attributeValue) {
            $res['AttributeValue'] = $this->attributeValue;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeType'])) {
            $model->attributeType = $map['AttributeType'];
        }
        if (isset($map['AttributeValue'])) {
            $model->attributeValue = $map['AttributeValue'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
