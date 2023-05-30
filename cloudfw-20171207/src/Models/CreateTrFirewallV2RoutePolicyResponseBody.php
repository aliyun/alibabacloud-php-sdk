<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateTrFirewallV2RoutePolicyResponseBody extends Model
{
    /**
     * @example C91D68BA-A0BE-51BF-A0F1-1CB5C57FE58D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example policy-8ebed27e13e14ce2****
     *
     * @var string
     */
    public $trFirewallRoutePolicyId;
    protected $_name = [
        'requestId'               => 'RequestId',
        'trFirewallRoutePolicyId' => 'TrFirewallRoutePolicyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trFirewallRoutePolicyId) {
            $res['TrFirewallRoutePolicyId'] = $this->trFirewallRoutePolicyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrFirewallV2RoutePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrFirewallRoutePolicyId'])) {
            $model->trFirewallRoutePolicyId = $map['TrFirewallRoutePolicyId'];
        }

        return $model;
    }
}
