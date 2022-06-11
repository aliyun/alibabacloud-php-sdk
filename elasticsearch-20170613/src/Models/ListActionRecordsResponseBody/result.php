<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody\result\statusInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var mixed[]
     */
    public $actionParams;

    /**
     * @var string[]
     */
    public $actionResultAccessList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $metaNow;

    /**
     * @var string
     */
    public $metaOld;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $process;

    /**
     * @var mixed[]
     */
    public $recordDiff;

    /**
     * @var string[]
     */
    public $recordIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $stateType;

    /**
     * @var statusInfo[]
     */
    public $statusInfo;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userInfo;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'actionName'             => 'ActionName',
        'actionParams'           => 'ActionParams',
        'actionResultAccessList' => 'ActionResultAccessList',
        'endTime'                => 'EndTime',
        'instanceId'             => 'InstanceId',
        'metaNow'                => 'MetaNow',
        'metaOld'                => 'MetaOld',
        'ownerId'                => 'OwnerId',
        'process'                => 'Process',
        'recordDiff'             => 'RecordDiff',
        'recordIds'              => 'RecordIds',
        'requestId'              => 'RequestId',
        'startTime'              => 'StartTime',
        'stateType'              => 'StateType',
        'statusInfo'             => 'StatusInfo',
        'userId'                 => 'UserId',
        'userInfo'               => 'UserInfo',
        'userType'               => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->actionResultAccessList) {
            $res['ActionResultAccessList'] = $this->actionResultAccessList;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->metaNow) {
            $res['MetaNow'] = $this->metaNow;
        }
        if (null !== $this->metaOld) {
            $res['MetaOld'] = $this->metaOld;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->recordDiff) {
            $res['RecordDiff'] = $this->recordDiff;
        }
        if (null !== $this->recordIds) {
            $res['RecordIds'] = $this->recordIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stateType) {
            $res['StateType'] = $this->stateType;
        }
        if (null !== $this->statusInfo) {
            $res['StatusInfo'] = [];
            if (null !== $this->statusInfo && \is_array($this->statusInfo)) {
                $n = 0;
                foreach ($this->statusInfo as $item) {
                    $res['StatusInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['ActionResultAccessList'])) {
            if (!empty($map['ActionResultAccessList'])) {
                $model->actionResultAccessList = $map['ActionResultAccessList'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MetaNow'])) {
            $model->metaNow = $map['MetaNow'];
        }
        if (isset($map['MetaOld'])) {
            $model->metaOld = $map['MetaOld'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['RecordDiff'])) {
            $model->recordDiff = $map['RecordDiff'];
        }
        if (isset($map['RecordIds'])) {
            if (!empty($map['RecordIds'])) {
                $model->recordIds = $map['RecordIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StateType'])) {
            $model->stateType = $map['StateType'];
        }
        if (isset($map['StatusInfo'])) {
            if (!empty($map['StatusInfo'])) {
                $model->statusInfo = [];
                $n                 = 0;
                foreach ($map['StatusInfo'] as $item) {
                    $model->statusInfo[$n++] = null !== $item ? statusInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
