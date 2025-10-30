<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetCustomPrivacyPolicyResponseBody\customPrivacyPolicy;

class GetCustomPrivacyPolicyResponseBody extends Model
{
    /**
     * @var customPrivacyPolicy
     */
    public $customPrivacyPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customPrivacyPolicy' => 'CustomPrivacyPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->customPrivacyPolicy) {
            $this->customPrivacyPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customPrivacyPolicy) {
            $res['CustomPrivacyPolicy'] = null !== $this->customPrivacyPolicy ? $this->customPrivacyPolicy->toArray($noStream) : $this->customPrivacyPolicy;
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
        if (isset($map['CustomPrivacyPolicy'])) {
            $model->customPrivacyPolicy = customPrivacyPolicy::fromMap($map['CustomPrivacyPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
