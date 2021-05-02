<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $deviceErrorCode;

    /**
     * @var string
     */
    public $deviceErrorMessage;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $retryCount;

    /**
     * @var int
     */
    public $maxRetryCount;
    protected $_name = [
        'success'            => 'Success',
        'deviceErrorCode'    => 'DeviceErrorCode',
        'deviceErrorMessage' => 'DeviceErrorMessage',
        'id'                 => 'Id',
        'retryCount'         => 'RetryCount',
        'maxRetryCount'      => 'MaxRetryCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->deviceErrorCode) {
            $res['DeviceErrorCode'] = $this->deviceErrorCode;
        }
        if (null !== $this->deviceErrorMessage) {
            $res['DeviceErrorMessage'] = $this->deviceErrorMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->maxRetryCount) {
            $res['MaxRetryCount'] = $this->maxRetryCount;
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['DeviceErrorCode'])) {
            $model->deviceErrorCode = $map['DeviceErrorCode'];
        }
        if (isset($map['DeviceErrorMessage'])) {
            $model->deviceErrorMessage = $map['DeviceErrorMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['MaxRetryCount'])) {
            $model->maxRetryCount = $map['MaxRetryCount'];
        }

        return $model;
    }
}
