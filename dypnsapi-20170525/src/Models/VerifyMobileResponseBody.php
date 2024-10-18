<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\VerifyMobileResponseBody\gateVerifyResultDTO;
use AlibabaCloud\Tea\Model;

class VerifyMobileResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   If OK is returned, the request is successful.
     *   For more information about other error codes, see [API response codes](https://help.aliyun.com/document_detail/85198.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The response parameters.
     *
     * @var gateVerifyResultDTO
     */
    public $gateVerifyResultDTO;

    /**
     * @description The returned message.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 8906582E-6722
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                => 'Code',
        'gateVerifyResultDTO' => 'GateVerifyResultDTO',
        'message'             => 'Message',
        'requestId'           => 'RequestId',
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
        if (null !== $this->gateVerifyResultDTO) {
            $res['GateVerifyResultDTO'] = null !== $this->gateVerifyResultDTO ? $this->gateVerifyResultDTO->toMap() : null;
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
     * @return VerifyMobileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GateVerifyResultDTO'])) {
            $model->gateVerifyResultDTO = gateVerifyResultDTO::fromMap($map['GateVerifyResultDTO']);
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
