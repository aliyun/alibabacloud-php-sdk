<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeSpec extends Model
{
    /**
     * @var BindingPolicy
     */
    public $bindingPolicy;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bindingPolicy' => 'BindingPolicy',
        'count' => 'Count',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->bindingPolicy) {
            $this->bindingPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingPolicy) {
            $res['BindingPolicy'] = null !== $this->bindingPolicy ? $this->bindingPolicy->toArray($noStream) : $this->bindingPolicy;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
