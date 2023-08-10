<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobReplicatorCompareResponseBody extends Model
{
    /**
     * @description The error code returned if the call failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the call failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The ID of the request.
     *
     * @example E6EB407F-C59F-4682-A682-A00FA6A2****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description Indicates whether image matching is enabled. Valid values:
     *
     *   **true**: Image matching is enabled.
     *   **false**: Image matching is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $synchronizationReplicatorCompareEnable;
    protected $_name = [
        'errCode'                                => 'ErrCode',
        'errMessage'                             => 'ErrMessage',
        'requestId'                              => 'RequestId',
        'success'                                => 'Success',
        'synchronizationReplicatorCompareEnable' => 'SynchronizationReplicatorCompareEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->synchronizationReplicatorCompareEnable) {
            $res['SynchronizationReplicatorCompareEnable'] = $this->synchronizationReplicatorCompareEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSynchronizationJobReplicatorCompareResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SynchronizationReplicatorCompareEnable'])) {
            $model->synchronizationReplicatorCompareEnable = $map['SynchronizationReplicatorCompareEnable'];
        }

        return $model;
    }
}
