<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyCreateVerifySchemeResponseBody\gateVerifySchemeData;
use AlibabaCloud\Tea\Model;

class JyCreateVerifySchemeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var gateVerifySchemeData
     */
    public $gateVerifySchemeData;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                 => 'Code',
        'gateVerifySchemeData' => 'GateVerifySchemeData',
        'message'              => 'Message',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->gateVerifySchemeData) {
            $res['GateVerifySchemeData'] = null !== $this->gateVerifySchemeData ? $this->gateVerifySchemeData->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JyCreateVerifySchemeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GateVerifySchemeData'])) {
            $model->gateVerifySchemeData = gateVerifySchemeData::fromMap($map['GateVerifySchemeData']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
