<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeChangesResponseBody\changes;

use AlibabaCloud\Tea\Model;

class change extends Model
{
    /**
     * @var bool
     */
    public $changePaused;

    /**
     * @var string
     */
    public $changeDescription;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $changeTimedout;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $changeMessage;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @var bool
     */
    public $changeFinished;

    /**
     * @var string
     */
    public $createUsername;

    /**
     * @var string
     */
    public $changeId;

    /**
     * @var bool
     */
    public $changeAborted;

    /**
     * @var bool
     */
    public $changeSucceed;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $changeName;
    protected $_name = [
        'changePaused'      => 'ChangePaused',
        'changeDescription' => 'ChangeDescription',
        'finishTime'        => 'FinishTime',
        'updateTime'        => 'UpdateTime',
        'changeTimedout'    => 'ChangeTimedout',
        'createTime'        => 'CreateTime',
        'changeMessage'     => 'ChangeMessage',
        'actionName'        => 'ActionName',
        'changeFinished'    => 'ChangeFinished',
        'createUsername'    => 'CreateUsername',
        'changeId'          => 'ChangeId',
        'changeAborted'     => 'ChangeAborted',
        'changeSucceed'     => 'ChangeSucceed',
        'envId'             => 'EnvId',
        'changeName'        => 'ChangeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changePaused) {
            $res['ChangePaused'] = $this->changePaused;
        }
        if (null !== $this->changeDescription) {
            $res['ChangeDescription'] = $this->changeDescription;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->changeTimedout) {
            $res['ChangeTimedout'] = $this->changeTimedout;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->changeMessage) {
            $res['ChangeMessage'] = $this->changeMessage;
        }
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->changeFinished) {
            $res['ChangeFinished'] = $this->changeFinished;
        }
        if (null !== $this->createUsername) {
            $res['CreateUsername'] = $this->createUsername;
        }
        if (null !== $this->changeId) {
            $res['ChangeId'] = $this->changeId;
        }
        if (null !== $this->changeAborted) {
            $res['ChangeAborted'] = $this->changeAborted;
        }
        if (null !== $this->changeSucceed) {
            $res['ChangeSucceed'] = $this->changeSucceed;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->changeName) {
            $res['ChangeName'] = $this->changeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return change
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangePaused'])) {
            $model->changePaused = $map['ChangePaused'];
        }
        if (isset($map['ChangeDescription'])) {
            $model->changeDescription = $map['ChangeDescription'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ChangeTimedout'])) {
            $model->changeTimedout = $map['ChangeTimedout'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChangeMessage'])) {
            $model->changeMessage = $map['ChangeMessage'];
        }
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ChangeFinished'])) {
            $model->changeFinished = $map['ChangeFinished'];
        }
        if (isset($map['CreateUsername'])) {
            $model->createUsername = $map['CreateUsername'];
        }
        if (isset($map['ChangeId'])) {
            $model->changeId = $map['ChangeId'];
        }
        if (isset($map['ChangeAborted'])) {
            $model->changeAborted = $map['ChangeAborted'];
        }
        if (isset($map['ChangeSucceed'])) {
            $model->changeSucceed = $map['ChangeSucceed'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['ChangeName'])) {
            $model->changeName = $map['ChangeName'];
        }

        return $model;
    }
}
