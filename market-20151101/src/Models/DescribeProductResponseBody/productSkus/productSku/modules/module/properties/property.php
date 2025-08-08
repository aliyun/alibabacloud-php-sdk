<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module\properties;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productSkus\productSku\modules\module\properties\property\propertyValues;

class property extends Model
{
    /**
     * @var string
     */
    public $displayUnit;

    /**
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
     * @var string
     */
    public $showType;
    protected $_name = [
        'displayUnit' => 'DisplayUnit',
        'key' => 'Key',
        'name' => 'Name',
        'propertyValues' => 'PropertyValues',
        'showType' => 'ShowType',
    ];

    public function validate()
    {
        if (null !== $this->propertyValues) {
            $this->propertyValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PropertyValues'] = null !== $this->propertyValues ? $this->propertyValues->toArray($noStream) : $this->propertyValues;
        }

        if (null !== $this->showType) {
            $res['ShowType'] = $this->showType;
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
