<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetQualityCheckTaskResultResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetQualityCheckTaskResultResponseBody extends Model
{
    /**
     * @example null
     *
     * @var int
     */
    public $cost;

    /**
     * @var data
     */
    public $data;

    /**
     * @example null
     *
     * @var string
     */
    public $dataType;

    /**
     * @example 0
     *
     * @var string
     */
    public $errCode;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example 67C7021A-D268-553D-8C15-A087B9604028
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'cost'      => 'cost',
        'data'      => 'data',
        'dataType'  => 'dataType',
        'errCode'   => 'errCode',
        'message'   => 'message',
        'requestId' => 'requestId',
        'success'   => 'success',
        'time'      => 'time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }
        if (null !== $this->errCode) {
            $res['errCode'] = $this->errCode;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityCheckTaskResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }
        if (isset($map['errCode'])) {
            $model->errCode = $map['errCode'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }

        return $model;
    }
}
