<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDeviceGroupRelationsResponse extends Model
{
    /**
     * @var int
     */
    public $alreadyRelatedGroupDeviceCount;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $successDeviceCount;

    /**
     * @var int
     */
    public $validDeviceCount;
    protected $_name = [
        'alreadyRelatedGroupDeviceCount' => 'AlreadyRelatedGroupDeviceCount',
        'code'                           => 'Code',
        'errorMessage'                   => 'ErrorMessage',
        'requestId'                      => 'RequestId',
        'success'                        => 'Success',
        'successDeviceCount'             => 'SuccessDeviceCount',
        'validDeviceCount'               => 'ValidDeviceCount',
    ];

    public function validate()
    {
        Model::validateRequired('alreadyRelatedGroupDeviceCount', $this->alreadyRelatedGroupDeviceCount, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('successDeviceCount', $this->successDeviceCount, true);
        Model::validateRequired('validDeviceCount', $this->validDeviceCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alreadyRelatedGroupDeviceCount) {
            $res['AlreadyRelatedGroupDeviceCount'] = $this->alreadyRelatedGroupDeviceCount;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->successDeviceCount) {
            $res['SuccessDeviceCount'] = $this->successDeviceCount;
        }
        if (null !== $this->validDeviceCount) {
            $res['ValidDeviceCount'] = $this->validDeviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDeviceGroupRelationsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlreadyRelatedGroupDeviceCount'])) {
            $model->alreadyRelatedGroupDeviceCount = $map['AlreadyRelatedGroupDeviceCount'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SuccessDeviceCount'])) {
            $model->successDeviceCount = $map['SuccessDeviceCount'];
        }
        if (isset($map['ValidDeviceCount'])) {
            $model->validDeviceCount = $map['ValidDeviceCount'];
        }

        return $model;
    }
}
