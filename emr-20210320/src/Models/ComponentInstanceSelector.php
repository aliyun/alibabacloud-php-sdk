<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentInstanceSelector\componentInstances;
use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentInstanceSelector\components;
use AlibabaCloud\Tea\Model;

class ComponentInstanceSelector extends Model
{
    /**
     * @deprecated
     *
     * @var string
     */
    public $actionScope;

    /**
     * @description 应用名称。
     *
     * @example HDFS
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description 组件实例列表。actionScope为COPONENT_INSTANCE时使用。
     *
     * @var componentInstances[]
     */
    public $componentInstances;

    /**
     * @description 组件列表。
     * actionScope为COPONENT时使用。
     * @var components[]
     */
    public $components;

    /**
     * @description 动作执行范围。取值范围：
     * This parameter is required.
     * @example APPLICATION
     *
     * @var string
     */
    public $runActionScope;
    protected $_name = [
        'actionScope'        => 'ActionScope',
        'applicationName'    => 'ApplicationName',
        'componentInstances' => 'ComponentInstances',
        'components'         => 'Components',
        'runActionScope'     => 'RunActionScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionScope) {
            $res['ActionScope'] = $this->actionScope;
        }
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->componentInstances) {
            $res['ComponentInstances'] = [];
            if (null !== $this->componentInstances && \is_array($this->componentInstances)) {
                $n = 0;
                foreach ($this->componentInstances as $item) {
                    $res['ComponentInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runActionScope) {
            $res['RunActionScope'] = $this->runActionScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ComponentInstanceSelector
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionScope'])) {
            $model->actionScope = $map['ActionScope'];
        }
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['ComponentInstances'])) {
            if (!empty($map['ComponentInstances'])) {
                $model->componentInstances = [];
                $n                         = 0;
                foreach ($map['ComponentInstances'] as $item) {
                    $model->componentInstances[$n++] = null !== $item ? componentInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? components::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RunActionScope'])) {
            $model->runActionScope = $map['RunActionScope'];
        }

        return $model;
    }
}
