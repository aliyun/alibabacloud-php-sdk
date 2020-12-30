<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponseBody\gateVerifyResultDTO;
use AlibabaCloud\Tea\Model;

class VerifyMobileResponseBody extends Model
{
    /**
     * @var gateVerifyResultDTO
     */
    public $gateVerifyResultDTO;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'gateVerifyResultDTO' => 'GateVerifyResultDTO',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
        'code'                => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gateVerifyResultDTO) {
            $res['GateVerifyResultDTO'] = null !== $this->gateVerifyResultDTO ? $this->gateVerifyResultDTO->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyMobileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GateVerifyResultDTO'])) {
            $model->gateVerifyResultDTO = gateVerifyResultDTO::fromMap($map['GateVerifyResultDTO']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
