<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\CreateCheckPolicyResponseBody\checkCustomPolicy;

class CreateCheckPolicyResponseBody extends Model
{
    /**
     * @var checkCustomPolicy
     */
    public $checkCustomPolicy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkCustomPolicy' => 'CheckCustomPolicy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->checkCustomPolicy) {
            $this->checkCustomPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkCustomPolicy) {
            $res['CheckCustomPolicy'] = null !== $this->checkCustomPolicy ? $this->checkCustomPolicy->toArray($noStream) : $this->checkCustomPolicy;
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
        if (isset($map['CheckCustomPolicy'])) {
            $model->checkCustomPolicy = checkCustomPolicy::fromMap($map['CheckCustomPolicy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
