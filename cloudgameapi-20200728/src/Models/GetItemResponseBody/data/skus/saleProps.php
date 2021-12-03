<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody\data\skus;

use AlibabaCloud\Tea\Model;

class saleProps extends Model
{
    /**
     * @var int
     */
    public $propertyId;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $valueId;
    protected $_name = [
        'propertyId'   => 'PropertyId',
        'propertyName' => 'PropertyName',
        'value'        => 'Value',
        'valueId'      => 'ValueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueId) {
            $res['ValueId'] = $this->valueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleProps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueId'])) {
            $model->valueId = $map['ValueId'];
        }

        return $model;
    }
}
