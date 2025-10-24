<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\VerifyDomainOwnerResponseBody\verifyResult;

class VerifyDomainOwnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var verifyResult
     */
    public $verifyResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        if (null !== $this->verifyResult) {
            $this->verifyResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = null !== $this->verifyResult ? $this->verifyResult->toArray($noStream) : $this->verifyResult;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = verifyResult::fromMap($map['VerifyResult']);
        }

        return $model;
    }
}
