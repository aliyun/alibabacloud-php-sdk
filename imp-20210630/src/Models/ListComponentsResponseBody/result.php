<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result\componentCategory;
use AlibabaCloud\SDK\Imp\V20210630\Models\ListComponentsResponseBody\result\configGroup;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 组件信息
     *
     * @var componentCategory[]
     */
    public $componentCategory;

    /**
     * @description 配置信息
     *
     * @var configGroup[]
     */
    public $configGroup;
    protected $_name = [
        'componentCategory' => 'ComponentCategory',
        'configGroup'       => 'ConfigGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentCategory) {
            $res['ComponentCategory'] = [];
            if (null !== $this->componentCategory && \is_array($this->componentCategory)) {
                $n = 0;
                foreach ($this->componentCategory as $item) {
                    $res['ComponentCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configGroup) {
            $res['ConfigGroup'] = [];
            if (null !== $this->configGroup && \is_array($this->configGroup)) {
                $n = 0;
                foreach ($this->configGroup as $item) {
                    $res['ConfigGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentCategory'])) {
            if (!empty($map['ComponentCategory'])) {
                $model->componentCategory = [];
                $n                        = 0;
                foreach ($map['ComponentCategory'] as $item) {
                    $model->componentCategory[$n++] = null !== $item ? componentCategory::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigGroup'])) {
            if (!empty($map['ConfigGroup'])) {
                $model->configGroup = [];
                $n                  = 0;
                foreach ($map['ConfigGroup'] as $item) {
                    $model->configGroup[$n++] = null !== $item ? configGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
