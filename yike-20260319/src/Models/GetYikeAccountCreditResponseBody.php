<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAccountCreditResponseBody\creditInfo;
use AlibabaCloud\SDK\Yike\V20260319\Models\GetYikeAccountCreditResponseBody\membershipInfo;

class GetYikeAccountCreditResponseBody extends Model
{
    /**
     * @var creditInfo
     */
    public $creditInfo;

    /**
     * @var membershipInfo
     */
    public $membershipInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creditInfo' => 'CreditInfo',
        'membershipInfo' => 'MembershipInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->creditInfo) {
            $this->creditInfo->validate();
        }
        if (null !== $this->membershipInfo) {
            $this->membershipInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditInfo) {
            $res['CreditInfo'] = null !== $this->creditInfo ? $this->creditInfo->toArray($noStream) : $this->creditInfo;
        }

        if (null !== $this->membershipInfo) {
            $res['MembershipInfo'] = null !== $this->membershipInfo ? $this->membershipInfo->toArray($noStream) : $this->membershipInfo;
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
        if (isset($map['CreditInfo'])) {
            $model->creditInfo = creditInfo::fromMap($map['CreditInfo']);
        }

        if (isset($map['MembershipInfo'])) {
            $model->membershipInfo = membershipInfo::fromMap($map['MembershipInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
