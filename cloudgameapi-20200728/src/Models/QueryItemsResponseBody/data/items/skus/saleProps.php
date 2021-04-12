<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsResponseBody\data\items\skus;

use AlibabaCloud\Tea\Model;

class saleProps extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $valueId;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var int
     */
    public $propertyId;
    protected $_name = [
        'value'        => 'Value',
        'valueId'      => 'ValueId',
        'propertyName' => 'PropertyName',
        'propertyId'   => 'PropertyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueId) {
            $res['ValueId'] = $this->valueId;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyId) {
            $res['PropertyId'] = $this->propertyId;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueId'])) {
            $model->valueId = $map['ValueId'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyId'])) {
            $model->propertyId = $map['PropertyId'];
        }

        return $model;
    }
}
