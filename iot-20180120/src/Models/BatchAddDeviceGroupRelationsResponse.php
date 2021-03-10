<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDeviceGroupRelationsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $validDeviceCount;

    /**
     * @var int
     */
    public $exceedTenGroupDeviceCount;

    /**
     * @var int
     */
    public $alreadyRelatedGroupDeviceCount;

    /**
     * @var int
     */
    public $successAddedDeviceCount;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'requestId'                      => 'RequestId',
        'success'                        => 'Success',
        'code'                           => 'Code',
        'validDeviceCount'               => 'ValidDeviceCount',
        'exceedTenGroupDeviceCount'      => 'ExceedTenGroupDeviceCount',
        'alreadyRelatedGroupDeviceCount' => 'AlreadyRelatedGroupDeviceCount',
        'successAddedDeviceCount'        => 'SuccessAddedDeviceCount',
        'errorMessage'                   => 'ErrorMessage',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('validDeviceCount', $this->validDeviceCount, true);
        Model::validateRequired('exceedTenGroupDeviceCount', $this->exceedTenGroupDeviceCount, true);
        Model::validateRequired('alreadyRelatedGroupDeviceCount', $this->alreadyRelatedGroupDeviceCount, true);
        Model::validateRequired('successAddedDeviceCount', $this->successAddedDeviceCount, true);
        Model::validateRequired('errorMessage', $this->errorMessage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->validDeviceCount) {
            $res['ValidDeviceCount'] = $this->validDeviceCount;
        }
        if (null !== $this->exceedTenGroupDeviceCount) {
            $res['ExceedTenGroupDeviceCount'] = $this->exceedTenGroupDeviceCount;
        }
        if (null !== $this->alreadyRelatedGroupDeviceCount) {
            $res['AlreadyRelatedGroupDeviceCount'] = $this->alreadyRelatedGroupDeviceCount;
        }
        if (null !== $this->successAddedDeviceCount) {
            $res['SuccessAddedDeviceCount'] = $this->successAddedDeviceCount;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDeviceGroupRelationsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ValidDeviceCount'])) {
            $model->validDeviceCount = $map['ValidDeviceCount'];
        }
        if (isset($map['ExceedTenGroupDeviceCount'])) {
            $model->exceedTenGroupDeviceCount = $map['ExceedTenGroupDeviceCount'];
        }
        if (isset($map['AlreadyRelatedGroupDeviceCount'])) {
            $model->alreadyRelatedGroupDeviceCount = $map['AlreadyRelatedGroupDeviceCount'];
        }
        if (isset($map['SuccessAddedDeviceCount'])) {
            $model->successAddedDeviceCount = $map['SuccessAddedDeviceCount'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
