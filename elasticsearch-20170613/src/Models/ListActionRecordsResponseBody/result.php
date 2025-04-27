<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListActionRecordsResponseBody\result\statusInfo;

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
        'actionName' => 'actionName',
        'actionParams' => 'actionParams',
        'actionResultAccessList' => 'actionResultAccessList',
        'endTime' => 'endTime',
        'instanceId' => 'instanceId',
        'metaNow' => 'metaNow',
        'metaOld' => 'metaOld',
        'ownerId' => 'ownerId',
        'process' => 'process',
        'recordDiff' => 'recordDiff',
        'recordIds' => 'recordIds',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
        'stateType' => 'stateType',
        'statusInfo' => 'statusInfo',
        'userId' => 'userId',
        'userInfo' => 'userInfo',
        'userType' => 'userType',
    ];

    public function validate()
    {
        if (\is_array($this->actionParams)) {
            Model::validateArray($this->actionParams);
        }
        if (\is_array($this->actionResultAccessList)) {
            Model::validateArray($this->actionResultAccessList);
        }
        if (\is_array($this->recordDiff)) {
            Model::validateArray($this->recordDiff);
        }
        if (\is_array($this->recordIds)) {
            Model::validateArray($this->recordIds);
        }
        if (\is_array($this->statusInfo)) {
            Model::validateArray($this->statusInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['actionName'] = $this->actionName;
        }

        if (null !== $this->actionParams) {
            if (\is_array($this->actionParams)) {
                $res['actionParams'] = [];
                foreach ($this->actionParams as $key1 => $value1) {
                    $res['actionParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->actionResultAccessList) {
            if (\is_array($this->actionResultAccessList)) {
                $res['actionResultAccessList'] = [];
                $n1 = 0;
                foreach ($this->actionResultAccessList as $item1) {
                    $res['actionResultAccessList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->metaNow) {
            $res['metaNow'] = $this->metaNow;
        }

        if (null !== $this->metaOld) {
            $res['metaOld'] = $this->metaOld;
        }

        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }

        if (null !== $this->process) {
            $res['process'] = $this->process;
        }

        if (null !== $this->recordDiff) {
            if (\is_array($this->recordDiff)) {
                $res['recordDiff'] = [];
                foreach ($this->recordDiff as $key1 => $value1) {
                    $res['recordDiff'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->recordIds) {
            if (\is_array($this->recordIds)) {
                $res['recordIds'] = [];
                $n1 = 0;
                foreach ($this->recordIds as $item1) {
                    $res['recordIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->stateType) {
            $res['stateType'] = $this->stateType;
        }

        if (null !== $this->statusInfo) {
            if (\is_array($this->statusInfo)) {
                $res['statusInfo'] = [];
                $n1 = 0;
                foreach ($this->statusInfo as $item1) {
                    $res['statusInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->userInfo) {
            $res['userInfo'] = $this->userInfo;
        }

        if (null !== $this->userType) {
            $res['userType'] = $this->userType;
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
        if (isset($map['actionName'])) {
            $model->actionName = $map['actionName'];
        }

        if (isset($map['actionParams'])) {
            if (!empty($map['actionParams'])) {
                $model->actionParams = [];
                foreach ($map['actionParams'] as $key1 => $value1) {
                    $model->actionParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['actionResultAccessList'])) {
            if (!empty($map['actionResultAccessList'])) {
                $model->actionResultAccessList = [];
                $n1 = 0;
                foreach ($map['actionResultAccessList'] as $item1) {
                    $model->actionResultAccessList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['metaNow'])) {
            $model->metaNow = $map['metaNow'];
        }

        if (isset($map['metaOld'])) {
            $model->metaOld = $map['metaOld'];
        }

        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }

        if (isset($map['process'])) {
            $model->process = $map['process'];
        }

        if (isset($map['recordDiff'])) {
            if (!empty($map['recordDiff'])) {
                $model->recordDiff = [];
                foreach ($map['recordDiff'] as $key1 => $value1) {
                    $model->recordDiff[$key1] = $value1;
                }
            }
        }

        if (isset($map['recordIds'])) {
            if (!empty($map['recordIds'])) {
                $model->recordIds = [];
                $n1 = 0;
                foreach ($map['recordIds'] as $item1) {
                    $model->recordIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['stateType'])) {
            $model->stateType = $map['stateType'];
        }

        if (isset($map['statusInfo'])) {
            if (!empty($map['statusInfo'])) {
                $model->statusInfo = [];
                $n1 = 0;
                foreach ($map['statusInfo'] as $item1) {
                    $model->statusInfo[$n1++] = statusInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['userInfo'])) {
            $model->userInfo = $map['userInfo'];
        }

        if (isset($map['userType'])) {
            $model->userType = $map['userType'];
        }

        return $model;
    }
}
