<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateIpv6EgressOnlyRuleResponseBody extends Model
{
    /**
     * @description The ID of the egress-only rule.
     *
     * @example ipv6py-hp3w98rmlbqp01245****
     *
     * @var string
     */
    public $ipv6EgressRuleId;

    /**
     * @description The ID of the request.
     *
     * @example 9DFEDBEE-E5AB-49E8-A2DC-CC114C67AF75
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv6EgressRuleId' => 'Ipv6EgressRuleId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6EgressRuleId) {
            $res['Ipv6EgressRuleId'] = $this->ipv6EgressRuleId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpv6EgressOnlyRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6EgressRuleId'])) {
            $model->ipv6EgressRuleId = $map['Ipv6EgressRuleId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
