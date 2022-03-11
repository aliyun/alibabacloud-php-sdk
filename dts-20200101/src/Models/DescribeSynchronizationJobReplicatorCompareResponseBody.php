<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSynchronizationJobReplicatorCompareResponseBody extends Model
{
    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;

    /**
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
