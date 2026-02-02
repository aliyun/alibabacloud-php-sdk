<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsResponseBody\recallManagementJobs\recallManagementTableInfo;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementJobsResponseBody\recallManagementJobs\recallManagerTableInfo;

class recallManagementJobs extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $recallManagementJobId;

    /**
     * @var recallManagementTableInfo
     */
    public $recallManagementTableInfo;

    /**
     * @var recallManagerTableInfo
     */
    public $recallManagerTableInfo;

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
        'recallManagementJobId' => 'RecallManagementJobId',
        'recallManagementTableInfo' => 'RecallManagementTableInfo',
        'recallManagerTableInfo' => 'RecallManagerTableInfo',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->recallManagementTableInfo) {
            $this->recallManagementTableInfo->validate();
        }
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

        if (null !== $this->recallManagementJobId) {
            $res['RecallManagementJobId'] = $this->recallManagementJobId;
        }

        if (null !== $this->recallManagementTableInfo) {
            $res['RecallManagementTableInfo'] = null !== $this->recallManagementTableInfo ? $this->recallManagementTableInfo->toArray($noStream) : $this->recallManagementTableInfo;
        }

        if (null !== $this->recallManagerTableInfo) {
            $res['RecallManagerTableInfo'] = null !== $this->recallManagerTableInfo ? $this->recallManagerTableInfo->toArray($noStream) : $this->recallManagerTableInfo;
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

        if (isset($map['RecallManagementJobId'])) {
            $model->recallManagementJobId = $map['RecallManagementJobId'];
        }

        if (isset($map['RecallManagementTableInfo'])) {
            $model->recallManagementTableInfo = recallManagementTableInfo::fromMap($map['RecallManagementTableInfo']);
        }

        if (isset($map['RecallManagerTableInfo'])) {
            $model->recallManagerTableInfo = recallManagerTableInfo::fromMap($map['RecallManagerTableInfo']);
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
