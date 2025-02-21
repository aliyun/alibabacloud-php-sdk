<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentInstanceSelector\componentInstances;
use AlibabaCloud\SDK\Emr\V20210320\Models\ComponentInstanceSelector\components;

class ComponentInstanceSelector extends Model
{
    /**
     * @var string
     */
    public $actionScope;
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var componentInstances[]
     */
    public $componentInstances;
    /**
     * @var components[]
     */
    public $components;
    /**
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
        if (\is_array($this->componentInstances)) {
            Model::validateArray($this->componentInstances);
        }
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionScope) {
            $res['ActionScope'] = $this->actionScope;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->componentInstances) {
            if (\is_array($this->componentInstances)) {
                $res['ComponentInstances'] = [];
                $n1                        = 0;
                foreach ($this->componentInstances as $item1) {
                    $res['ComponentInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1                = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->runActionScope) {
            $res['RunActionScope'] = $this->runActionScope;
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
        if (isset($map['ActionScope'])) {
            $model->actionScope = $map['ActionScope'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ComponentInstances'])) {
            if (!empty($map['ComponentInstances'])) {
                $model->componentInstances = [];
                $n1                        = 0;
                foreach ($map['ComponentInstances'] as $item1) {
                    $model->componentInstances[$n1++] = componentInstances::fromMap($item1);
                }
            }
        }

        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n1                = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1++] = components::fromMap($item1);
                }
            }
        }

        if (isset($map['RunActionScope'])) {
            $model->runActionScope = $map['RunActionScope'];
        }

        return $model;
    }
}
