<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvResponseBody\modules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeImageInstanceForIsvResponseBody\modules\properties\propertyValues;

class properties extends Model
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
     * @var propertyValues[]
     */
    public $propertyValues;
    /**
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
        if (\is_array($this->propertyValues)) {
            Model::validateArray($this->propertyValues);
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
            if (\is_array($this->propertyValues)) {
                $res['PropertyValues'] = [];
                $n1                    = 0;
                foreach ($this->propertyValues as $item1) {
                    $res['PropertyValues'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['PropertyValues'])) {
                $model->propertyValues = [];
                $n1                    = 0;
                foreach ($map['PropertyValues'] as $item1) {
                    $model->propertyValues[$n1++] = propertyValues::fromMap($item1);
                }
            }
        }

        if (isset($map['ShowType'])) {
            $model->showType = $map['ShowType'];
        }

        return $model;
    }
}
