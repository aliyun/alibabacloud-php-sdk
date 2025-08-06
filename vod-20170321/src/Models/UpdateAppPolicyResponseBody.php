<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateAppPolicyResponseBody\appPolicy;

class UpdateAppPolicyResponseBody extends Model
{
    /**
     * @var appPolicy
     */
    public $appPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appPolicy' => 'AppPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appPolicy) {
            $this->appPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPolicy) {
            $res['AppPolicy'] = null !== $this->appPolicy ? $this->appPolicy->toArray($noStream) : $this->appPolicy;
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
        if (isset($map['AppPolicy'])) {
            $model->appPolicy = appPolicy::fromMap($map['AppPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
