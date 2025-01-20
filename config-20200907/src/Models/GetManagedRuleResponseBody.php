<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule;

class GetManagedRuleResponseBody extends Model
{
    /**
     * @var managedRule
     */
    public $managedRule;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedRule' => 'ManagedRule',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->managedRule) {
            $this->managedRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toArray($noStream) : $this->managedRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ManagedRule'])) {
            $model->managedRule = managedRule::fromMap($map['ManagedRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
