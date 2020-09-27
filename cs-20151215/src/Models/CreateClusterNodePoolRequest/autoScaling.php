<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Tea\Model;

class autoScaling extends Model
{
    /**
     * @description 是否开启自动伸缩。
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 最大实例数。
     *
     * @var int
     */
    public $maxInstances;

    /**
     * @description 最小实例数。
     *
     * @var int
     */
    public $minInstances;

    /**
     * @description 扩容节点类型。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'enable'       => 'enable',
        'maxInstances' => 'max_instances',
        'minInstances' => 'min_instances',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->maxInstances) {
            $res['max_instances'] = $this->maxInstances;
        }
        if (null !== $this->minInstances) {
            $res['min_instances'] = $this->minInstances;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoScaling
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['max_instances'])) {
            $model->maxInstances = $map['max_instances'];
        }
        if (isset($map['min_instances'])) {
            $model->minInstances = $map['min_instances'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
