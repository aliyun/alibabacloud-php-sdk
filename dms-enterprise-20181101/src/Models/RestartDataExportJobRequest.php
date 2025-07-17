<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class RestartDataExportJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1276****
     *
     * @var int
     */
    public $jobId;

    /**
     * @description This parameter is required.
     *
     * @example 420****
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 23****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'jobId' => 'JobId',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestartDataExportJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
