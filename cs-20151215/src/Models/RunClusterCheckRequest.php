<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RunClusterCheckRequest extends Model
{
    /**
     * @description The cluster check items.
     *
     * @var string[]
     */
    public $options;

    /**
     * @description The target to be checked.
     *
     * @example np1f6779297c4444a3a1cdd29be8e5****
     *
     * @var string
     */
    public $target;

    /**
     * @description The check method.
     *
     * This parameter is required.
     *
     * @example ClusterUpgrade
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'options' => 'options',
        'target' => 'target',
        'type' => 'type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunClusterCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['options'])) {
            $model->options = $map['options'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
