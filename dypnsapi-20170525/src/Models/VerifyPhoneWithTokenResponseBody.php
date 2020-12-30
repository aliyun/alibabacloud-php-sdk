<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyPhoneWithTokenResponseBody\gateVerify;
use AlibabaCloud\Tea\Model;

class VerifyPhoneWithTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var gateVerify
     */
    public $gateVerify;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'gateVerify' => 'GateVerify',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->gateVerify) {
            $res['GateVerify'] = null !== $this->gateVerify ? $this->gateVerify->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyPhoneWithTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GateVerify'])) {
            $model->gateVerify = gateVerify::fromMap($map['GateVerify']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
