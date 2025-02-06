<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifyDBInstanceAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $attributeType;
    /**
     * @var string
     */
    public $attributeValue;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var string
     */
    public $product;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
