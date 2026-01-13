<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementJobResponseBody\recallManagerTableInfo;

class GetRecallManagementJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $log;

    /**
     * @var string
     */
    public $recallManagementJobId;

    /**
     * @var recallManagerTableInfo
     */
    public $recallManagerTableInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'log' => 'Log',
        'recallManagementJobId' => 'RecallManagementJobId',
        'recallManagerTableInfo' => 'RecallManagerTableInfo',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->recallManagerTableInfo) {
            $this->recallManagerTableInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->log) {
            $res['Log'] = $this->log;
        }

        if (null !== $this->recallManagementJobId) {
            $res['RecallManagementJobId'] = $this->recallManagementJobId;
        }

        if (null !== $this->recallManagerTableInfo) {
            $res['RecallManagerTableInfo'] = null !== $this->recallManagerTableInfo ? $this->recallManagerTableInfo->toArray($noStream) : $this->recallManagerTableInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Log'])) {
            $model->log = $map['Log'];
        }

        if (isset($map['RecallManagementJobId'])) {
            $model->recallManagementJobId = $map['RecallManagementJobId'];
        }

        if (isset($map['RecallManagerTableInfo'])) {
            $model->recallManagerTableInfo = recallManagerTableInfo::fromMap($map['RecallManagerTableInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
