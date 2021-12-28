<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRule) {
            $res['ManagedRule'] = null !== $this->managedRule ? $this->managedRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetManagedRuleResponseBody
     */
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
