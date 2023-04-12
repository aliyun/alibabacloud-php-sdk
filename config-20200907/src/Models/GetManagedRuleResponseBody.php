<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetManagedRuleResponseBody\managedRule;
use AlibabaCloud\Tea\Model;

class GetManagedRuleResponseBody extends Model
{
    /**
     * @description The details of the managed rule.
     *
     * @var managedRule
     */
    public $managedRule;

    /**
     * @description The ID of the request.
     *
     * @example 7E6DDC09-87C1-5310-A924-3491EAAE6F90
     *
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
