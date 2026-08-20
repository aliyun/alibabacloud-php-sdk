<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class SessionNetworkRule extends Model
{
    /**
     * @var SessionNetworkRuleTransform
     */
    public $transform;
    protected $_name = [
        'transform' => 'transform',
    ];

    public function validate()
    {
        if (null !== $this->transform) {
            $this->transform->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transform) {
            $res['transform'] = null !== $this->transform ? $this->transform->toArray($noStream) : $this->transform;
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
        if (isset($map['transform'])) {
            $model->transform = SessionNetworkRuleTransform::fromMap($map['transform']);
        }

        return $model;
    }
}
