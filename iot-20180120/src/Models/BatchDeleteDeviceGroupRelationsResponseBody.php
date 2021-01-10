<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDeviceGroupRelationsResponseBody extends Model
{
    /**
     * @var int
     */
    public $validDeviceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $successDeviceCount;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $alreadyRelatedGroupDeviceCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'validDeviceCount'               => 'ValidDeviceCount',
        'requestId'                      => 'RequestId',
        'successDeviceCount'             => 'SuccessDeviceCount',
        'errorMessage'                   => 'ErrorMessage',
        'alreadyRelatedGroupDeviceCount' => 'AlreadyRelatedGroupDeviceCount',
        'code'                           => 'Code',
        'success'                        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->validDeviceCount) {
            $res['ValidDeviceCount'] = $this->validDeviceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successDeviceCount) {
            $res['SuccessDeviceCount'] = $this->successDeviceCount;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->alreadyRelatedGroupDeviceCount) {
            $res['AlreadyRelatedGroupDeviceCount'] = $this->alreadyRelatedGroupDeviceCount;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDeviceGroupRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValidDeviceCount'])) {
            $model->validDeviceCount = $map['ValidDeviceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuccessDeviceCount'])) {
            $model->successDeviceCount = $map['SuccessDeviceCount'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['AlreadyRelatedGroupDeviceCount'])) {
            $model->alreadyRelatedGroupDeviceCount = $map['AlreadyRelatedGroupDeviceCount'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
