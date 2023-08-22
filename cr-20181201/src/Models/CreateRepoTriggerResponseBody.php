<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoTriggerResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the request.
     *
     * @example B79F5E0E-8770-407D-BCB6-ECF4BA9C****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the trigger.
     *
     * @example crw-0z4pf81pgz35****
     *
     * @var string
     */
    public $triggerId;
    protected $_name = [
        'code'      => 'Code',
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'triggerId' => 'TriggerId',
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->triggerId) {
            $res['TriggerId'] = $this->triggerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TriggerId'])) {
            $model->triggerId = $map['TriggerId'];
        }

        return $model;
    }
}
