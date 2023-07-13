<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDeviceGroupRelationsResponseBody extends Model
{
    /**
     * @description Indicates whether the call was successful.
     *
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example 0
     *
     * @var int
     */
    public $alreadyRelatedGroupDeviceCount;

    /**
     * @description The number of valid devices that you specified.
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The number of devices that exist in the group.
     *
     * @example 0
     *
     * @var int
     */
    public $exceedTenGroupDeviceCount;

    /**
     * @description The number of the specified devices that are added to 10 or more groups. You can add a device to a maximum of 10 groups.
     *
     * @example 671D0F8F-FDC7-4B12-93FA-336C079C965A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 2
     *
     * @var int
     */
    public $successAddedDeviceCount;

    /**
     * @description The number of devices that are added to the group.
     *
     * @example 2
     *
     * @var int
     */
    public $validDeviceCount;
    protected $_name = [
        'alreadyRelatedGroupDeviceCount' => 'AlreadyRelatedGroupDeviceCount',
        'code'                           => 'Code',
        'errorMessage'                   => 'ErrorMessage',
        'exceedTenGroupDeviceCount'      => 'ExceedTenGroupDeviceCount',
        'requestId'                      => 'RequestId',
        'success'                        => 'Success',
        'successAddedDeviceCount'        => 'SuccessAddedDeviceCount',
        'validDeviceCount'               => 'ValidDeviceCount',
    ];

    public function validate()
    {
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
        if (null !== $this->exceedTenGroupDeviceCount) {
            $res['ExceedTenGroupDeviceCount'] = $this->exceedTenGroupDeviceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->successAddedDeviceCount) {
            $res['SuccessAddedDeviceCount'] = $this->successAddedDeviceCount;
        }
        if (null !== $this->validDeviceCount) {
            $res['ValidDeviceCount'] = $this->validDeviceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDeviceGroupRelationsResponseBody
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
        if (isset($map['ExceedTenGroupDeviceCount'])) {
            $model->exceedTenGroupDeviceCount = $map['ExceedTenGroupDeviceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SuccessAddedDeviceCount'])) {
            $model->successAddedDeviceCount = $map['SuccessAddedDeviceCount'];
        }
        if (isset($map['ValidDeviceCount'])) {
            $model->validDeviceCount = $map['ValidDeviceCount'];
        }

        return $model;
    }
}
