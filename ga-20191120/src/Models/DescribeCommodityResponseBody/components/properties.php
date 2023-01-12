<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityResponseBody\components\properties\propertyValueList;
use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @example ord_time
     *
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
        'code'              => 'Code',
        'name'              => 'Name',
        'propertyValueList' => 'PropertyValueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->propertyValueList) {
            $res['PropertyValueList'] = [];
            if (null !== $this->propertyValueList && \is_array($this->propertyValueList)) {
                $n = 0;
                foreach ($this->propertyValueList as $item) {
                    $res['PropertyValueList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
     */
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
                $n                        = 0;
                foreach ($map['PropertyValueList'] as $item) {
                    $model->propertyValueList[$n++] = null !== $item ? propertyValueList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
