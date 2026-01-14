<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components\properties\propertyValueList;

class properties extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var propertyValueList[]
     */
    public $propertyValueList;
    protected $_name = [
        'code' => 'Code',
        'name' => 'Name',
        'propertyValueList' => 'PropertyValueList',
    ];

    public function validate()
    {
        if (\is_array($this->propertyValueList)) {
            Model::validateArray($this->propertyValueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->propertyValueList) {
            if (\is_array($this->propertyValueList)) {
                $res['PropertyValueList'] = [];
                $n1 = 0;
                foreach ($this->propertyValueList as $item1) {
                    $res['PropertyValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PropertyValueList'])) {
            if (!empty($map['PropertyValueList'])) {
                $model->propertyValueList = [];
                $n1 = 0;
                foreach ($map['PropertyValueList'] as $item1) {
                    $model->propertyValueList[$n1] = propertyValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
