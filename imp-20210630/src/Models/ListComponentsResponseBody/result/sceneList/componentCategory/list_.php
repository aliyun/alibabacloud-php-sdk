<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result\sceneList\componentCategory;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 组件名称
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 组件类型
     *
     * @var string
     */
    public $componentType;

    /**
     * @description 是否使用
     *
     * @var string
     */
    public $inUse;
    protected $_name = [
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
        'inUse'         => 'InUse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->inUse) {
            $res['InUse'] = $this->inUse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['InUse'])) {
            $model->inUse = $map['InUse'];
        }

        return $model;
    }
}
