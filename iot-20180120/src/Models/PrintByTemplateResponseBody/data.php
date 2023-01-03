<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\PrintByTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var string
     */
    public $deviceErrorCode;

    /**
     * @example no paper
     *
     * @var string
     */
    public $deviceErrorMessage;

    /**
     * @example NyWh5lw3*****RfL9LJUivhOhQV*****
     *
     * @var string
     */
    public $id;

    /**
     * @example 2
     *
     * @var int
     */
    public $maxRetryCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $retryCount;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'deviceErrorCode'    => 'DeviceErrorCode',
        'deviceErrorMessage' => 'DeviceErrorMessage',
        'id'                 => 'Id',
        'maxRetryCount'      => 'MaxRetryCount',
        'retryCount'         => 'RetryCount',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceErrorCode) {
            $res['DeviceErrorCode'] = $this->deviceErrorCode;
        }
        if (null !== $this->deviceErrorMessage) {
            $res['DeviceErrorMessage'] = $this->deviceErrorMessage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxRetryCount) {
            $res['MaxRetryCount'] = $this->maxRetryCount;
        }
        if (null !== $this->retryCount) {
            $res['RetryCount'] = $this->retryCount;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DeviceErrorCode'])) {
            $model->deviceErrorCode = $map['DeviceErrorCode'];
        }
        if (isset($map['DeviceErrorMessage'])) {
            $model->deviceErrorMessage = $map['DeviceErrorMessage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MaxRetryCount'])) {
            $model->maxRetryCount = $map['MaxRetryCount'];
        }
        if (isset($map['RetryCount'])) {
            $model->retryCount = $map['RetryCount'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
