<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module\properties;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module\properties\property\propertyValues;
use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $displayUnit;

    /**
     * @example img_id
     *
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var propertyValues
     */
    public $propertyValues;

    /**
     * @example number
     *
     * @var string
     */
    public $showType;
    protected $_name = [
        'displayUnit'    => 'DisplayUnit',
        'key'            => 'Key',
        'name'           => 'Name',
        'propertyValues' => 'PropertyValues',
        'showType'       => 'ShowType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayUnit) {
            $res['DisplayUnit'] = $this->displayUnit;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->propertyValues) {
            $res['PropertyValues'] = null !== $this->propertyValues ? $this->propertyValues->toMap() : null;
        }
        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayUnit'])) {
            $model->displayUnit = $map['DisplayUnit'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PropertyValues'])) {
            $model->propertyValues = propertyValues::fromMap($map['PropertyValues']);
        }
        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        return $model;
    }
}
