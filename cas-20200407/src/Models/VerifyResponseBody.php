<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class VerifyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $signatureValid;
    protected $_name = [
        'requestId'      => 'RequestId',
        'signatureValid' => 'SignatureValid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signatureValid) {
            $res['SignatureValid'] = $this->signatureValid;
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

        if (isset($map['SignatureValid'])) {
            $model->signatureValid = $map['SignatureValid'];
        }

        return $model;
    }
}
