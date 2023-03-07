<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateAgAccountResponseBody\agRelationDto;
use AlibabaCloud\Tea\Model;

class CreateAgAccountResponseBody extends Model
{
    /**
     * @description The relationship between the account that is used to call the CreateAgAccount operation and the account that is created.
     *
     * @var agRelationDto
     */
    public $agRelationDto;

    /**
     * @description The status code returned.
     *
     * @example LOGIN_EMAIL_HAS_BEEN_USED
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned.
     *
     * @example loginEmail=685741089H@chinaunicom.cn,has used
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example EAE08A27-386C-579E-966D-8853EC3C5D0E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'agRelationDto' => 'AgRelationDto',
        'code'          => 'Code',
        'message'       => 'Message',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agRelationDto) {
            $res['AgRelationDto'] = null !== $this->agRelationDto ? $this->agRelationDto->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgRelationDto'])) {
            $model->agRelationDto = agRelationDto::fromMap($map['AgRelationDto']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
