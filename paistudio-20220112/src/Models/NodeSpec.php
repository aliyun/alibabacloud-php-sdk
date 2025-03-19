<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class NodeSpec extends Model
{
    /**
     * @var BindingPolicy
     */
    public $bindingPolicy;

    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example ecs.g6.4xlarge
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindingPolicy' => 'BindingPolicy',
        'count' => 'Count',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindingPolicy) {
            $res['BindingPolicy'] = null !== $this->bindingPolicy ? $this->bindingPolicy->toMap() : null;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindingPolicy'])) {
            $model->bindingPolicy = BindingPolicy::fromMap($map['BindingPolicy']);
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
