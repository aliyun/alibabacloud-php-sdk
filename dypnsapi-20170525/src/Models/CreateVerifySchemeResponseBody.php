<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\CreateVerifySchemeResponseBody\gateVerifySchemeDTO;
use AlibabaCloud\Tea\Model;

class CreateVerifySchemeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var gateVerifySchemeDTO
     */
    public $gateVerifySchemeDTO;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'                => 'Code',
        'gateVerifySchemeDTO' => 'GateVerifySchemeDTO',
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
        if (null !== $this->gateVerifySchemeDTO) {
            $res['GateVerifySchemeDTO'] = null !== $this->gateVerifySchemeDTO ? $this->gateVerifySchemeDTO->toMap() : null;
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
     * @return CreateVerifySchemeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GateVerifySchemeDTO'])) {
            $model->gateVerifySchemeDTO = gateVerifySchemeDTO::fromMap($map['GateVerifySchemeDTO']);
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
