<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeMaintenanceActionResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $deadline;

    /**
     * @var string
     */
    public $prepareInterval;

    /**
     * @var string
     */
    public $DBType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string
     */
    public $DBVersion;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $resultInfo;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'status'          => 'Status',
        'deadline'        => 'Deadline',
        'prepareInterval' => 'PrepareInterval',
        'DBType'          => 'DBType',
        'startTime'       => 'StartTime',
        'taskType'        => 'TaskType',
        'DBVersion'       => 'DBVersion',
        'DBClusterId'     => 'DBClusterId',
        'modifiedTime'    => 'ModifiedTime',
        'region'          => 'Region',
        'resultInfo'      => 'ResultInfo',
        'createdTime'     => 'CreatedTime',
        'id'              => 'Id',
        'switchTime'      => 'SwitchTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deadline) {
            $res['Deadline'] = $this->deadline;
        }
        if (null !== $this->prepareInterval) {
            $res['PrepareInterval'] = $this->prepareInterval;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->DBVersion) {
            $res['DBVersion'] = $this->DBVersion;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resultInfo) {
            $res['ResultInfo'] = $this->resultInfo;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Deadline'])) {
            $model->deadline = $map['Deadline'];
        }
        if (isset($map['PrepareInterval'])) {
            $model->prepareInterval = $map['PrepareInterval'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['DBVersion'])) {
            $model->DBVersion = $map['DBVersion'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResultInfo'])) {
            $model->resultInfo = $map['ResultInfo'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
