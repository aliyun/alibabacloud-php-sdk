<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class RunClusterCheckRequest extends Model
{
    /**
     * @var string[]
     */
    public $options;

    /**
     * @example ClusterUpgrade
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'options' => 'options',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->options) {
            $res['options'] = $this->options;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
