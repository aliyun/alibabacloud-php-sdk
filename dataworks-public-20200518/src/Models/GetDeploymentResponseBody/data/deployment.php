<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody\data;

use AlibabaCloud\Tea\Model;

class deployment extends Model
{
    /**
     * @description The check status of one or more files in the deployment task. If the value of the ToEnvironment parameter is 1, the files can be deployed to the production environment only when the value of the Status parameter is 1 and the CheckingStatus parameter is empty. Valid values:
     *
     *   7: The file failed the check.
     *   8: The file is being checked.
     *
     * @example 7
     *
     * @var int
     */
    public $checkingStatus;

    /**
     * @description The time when the deployment task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who created the deployment task.
     *
     * @example 20030****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The error message that was returned when the deployment task failed. In this case, the value of the Status parameter is 2.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The time when the deployment task was run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The environment in which the deployment task was run. Valid values: 0 and 1. A value of 0 indicates the on-premises environment. A value of 1 indicates the development environment.
     *
     * @example 0
     *
     * @var int
     */
    public $fromEnvironment;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who ran the deployment task.
     *
     * @example 2003****
     *
     * @var string
     */
    public $handlerId;

    /**
     * @description The name of the deployment task. The value is the same as the name of the specific deployment task that is displayed on the Release Package page in the Deploy module.
     *
     * @example ods_user_info_d-2020-07-04_20030****
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the deployment task. Valid values: 0, 1, and 2. A value of 0 indicates that the task is ready. A value of 1 indicates that the task was successful. A value of 2 indicates that the task failed.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The environment to which the file was deployed. Valid values: 1 and 2. A value of 1 indicates the development environment. A value of 2 indicates the production environment.
     *
     * @example 1
     *
     * @var int
     */
    public $toEnvironment;
    protected $_name = [
        'checkingStatus'  => 'CheckingStatus',
        'createTime'      => 'CreateTime',
        'creatorId'       => 'CreatorId',
        'errorMessage'    => 'ErrorMessage',
        'executeTime'     => 'ExecuteTime',
        'fromEnvironment' => 'FromEnvironment',
        'handlerId'       => 'HandlerId',
        'name'            => 'Name',
        'status'          => 'Status',
        'toEnvironment'   => 'ToEnvironment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingStatus) {
            $res['CheckingStatus'] = $this->checkingStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->fromEnvironment) {
            $res['FromEnvironment'] = $this->fromEnvironment;
        }
        if (null !== $this->handlerId) {
            $res['HandlerId'] = $this->handlerId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toEnvironment) {
            $res['ToEnvironment'] = $this->toEnvironment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingStatus'])) {
            $model->checkingStatus = $map['CheckingStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['FromEnvironment'])) {
            $model->fromEnvironment = $map['FromEnvironment'];
        }
        if (isset($map['HandlerId'])) {
            $model->handlerId = $map['HandlerId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToEnvironment'])) {
            $model->toEnvironment = $map['ToEnvironment'];
        }

        return $model;
    }
}
