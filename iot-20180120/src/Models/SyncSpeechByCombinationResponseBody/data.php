<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SyncSpeechByCombinationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $maxRetryCount;

    /**
     * @var string
     */
    public $deviceErrorCode;

    /**
     * @var string
     */
    public $deviceErrorMessage;
    protected $_name = [
        'id'                 => 'Id',
        'retryCount'         => 'RetryCount',
        'success'            => 'Success',
        'maxRetryCount'      => 'MaxRetryCount',
        'deviceErrorCode'    => 'DeviceErrorCode',
        'deviceErrorMessage' => 'DeviceErrorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->maxRetryCount) {
            $res['MaxRetryCount'] = $this->maxRetryCount;
        }
        if (null !== $this->deviceErrorCode) {
            $res['DeviceErrorCode'] = $this->deviceErrorCode;
        }
        if (null !== $this->deviceErrorMessage) {
            $res['DeviceErrorMessage'] = $this->deviceErrorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['MaxRetryCount'])) {
            $model->maxRetryCount = $map['MaxRetryCount'];
        }
        if (isset($map['DeviceErrorCode'])) {
            $model->deviceErrorCode = $map['DeviceErrorCode'];
        }
        if (isset($map['DeviceErrorMessage'])) {
            $model->deviceErrorMessage = $map['DeviceErrorMessage'];
        }

        return $model;
    }
}
