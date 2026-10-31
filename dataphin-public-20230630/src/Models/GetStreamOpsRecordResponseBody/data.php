<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStreamOpsRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string
     */
    public $deploymentInstanceId;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $logContent;

    /**
     * @var string
     */
    public $operate;

    /**
     * @var string
     */
    public $opsRecordId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'deploymentId' => 'DeploymentId',
        'deploymentInstanceId' => 'DeploymentInstanceId',
        'endTime' => 'EndTime',
        'logContent' => 'LogContent',
        'operate' => 'Operate',
        'opsRecordId' => 'OpsRecordId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['DeploymentId'] = $this->deploymentId;
        }

        if (null !== $this->deploymentInstanceId) {
            $res['DeploymentInstanceId'] = $this->deploymentInstanceId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }

        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
        }

        if (null !== $this->opsRecordId) {
            $res['OpsRecordId'] = $this->opsRecordId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['DeploymentId'])) {
            $model->deploymentId = $map['DeploymentId'];
        }

        if (isset($map['DeploymentInstanceId'])) {
            $model->deploymentInstanceId = $map['DeploymentInstanceId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }

        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        if (isset($map['OpsRecordId'])) {
            $model->opsRecordId = $map['OpsRecordId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
