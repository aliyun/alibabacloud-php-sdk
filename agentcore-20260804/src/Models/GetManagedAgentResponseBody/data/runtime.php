<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\runtime\compute;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetManagedAgentResponseBody\data\runtime\sessionPolicy;

class runtime extends Model
{
    /**
     * @var compute
     */
    public $compute;

    /**
     * @var sessionPolicy
     */
    public $sessionPolicy;
    protected $_name = [
        'compute' => 'compute',
        'sessionPolicy' => 'sessionPolicy',
    ];

    public function validate()
    {
        if (null !== $this->compute) {
            $this->compute->validate();
        }
        if (null !== $this->sessionPolicy) {
            $this->sessionPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compute) {
            $res['compute'] = null !== $this->compute ? $this->compute->toArray($noStream) : $this->compute;
        }

        if (null !== $this->sessionPolicy) {
            $res['sessionPolicy'] = null !== $this->sessionPolicy ? $this->sessionPolicy->toArray($noStream) : $this->sessionPolicy;
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
        if (isset($map['compute'])) {
            $model->compute = compute::fromMap($map['compute']);
        }

        if (isset($map['sessionPolicy'])) {
            $model->sessionPolicy = sessionPolicy::fromMap($map['sessionPolicy']);
        }

        return $model;
    }
}
