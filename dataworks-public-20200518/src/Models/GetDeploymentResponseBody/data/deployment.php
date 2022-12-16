<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody\data;

use AlibabaCloud\Tea\Model;

class deployment extends Model
{
    /**
     * @example 7
     *
     * @var int
     */
    public $checkingStatus;

    /**
     * @example 1593877765000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 20030****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example 1593877765000
     *
     * @var int
     */
    public $executeTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $fromEnvironment;

    /**
     * @example 2003****
     *
     * @var string
     */
    public $handlerId;

    /**
     * @example ods_user_info_d-2020-07-04_20030****
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
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
