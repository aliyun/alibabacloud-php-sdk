<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateIpv6EgressOnlyRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $ipv6EgressRuleId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipv6EgressRuleId' => 'Ipv6EgressRuleId',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
