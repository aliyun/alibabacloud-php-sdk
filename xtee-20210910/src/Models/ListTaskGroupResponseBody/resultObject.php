<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\ListTaskGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\ListTaskGroupResponseBody\resultObject\subTaskList;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $creatorUserId;

    /**
     * @var string
     */
    public $groupStatus;

    /**
     * @var string[]
     */
    public $sampleNames;

    /**
     * @var int
     */
    public $subTaskCount;

    /**
     * @var subTaskList[]
     */
    public $subTaskList;

    /**
     * @var string
     */
    public $tab;

    /**
     * @var int
     */
    public $taskGroupId;

    /**
     * @var string
     */
    public $taskGroupName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creatorUserId' => 'CreatorUserId',
        'groupStatus' => 'GroupStatus',
        'sampleNames' => 'SampleNames',
        'subTaskCount' => 'SubTaskCount',
        'subTaskList' => 'SubTaskList',
        'tab' => 'Tab',
        'taskGroupId' => 'TaskGroupId',
        'taskGroupName' => 'TaskGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->sampleNames)) {
            Model::validateArray($this->sampleNames);
        }
        if (\is_array($this->subTaskList)) {
            Model::validateArray($this->subTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorUserId) {
            $res['CreatorUserId'] = $this->creatorUserId;
        }

        if (null !== $this->groupStatus) {
            $res['GroupStatus'] = $this->groupStatus;
        }

        if (null !== $this->sampleNames) {
            if (\is_array($this->sampleNames)) {
                $res['SampleNames'] = [];
                $n1 = 0;
                foreach ($this->sampleNames as $item1) {
                    $res['SampleNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subTaskCount) {
            $res['SubTaskCount'] = $this->subTaskCount;
        }

        if (null !== $this->subTaskList) {
            if (\is_array($this->subTaskList)) {
                $res['SubTaskList'] = [];
                $n1 = 0;
                foreach ($this->subTaskList as $item1) {
                    $res['SubTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tab) {
            $res['Tab'] = $this->tab;
        }

        if (null !== $this->taskGroupId) {
            $res['TaskGroupId'] = $this->taskGroupId;
        }

        if (null !== $this->taskGroupName) {
            $res['TaskGroupName'] = $this->taskGroupName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorUserId'])) {
            $model->creatorUserId = $map['CreatorUserId'];
        }

        if (isset($map['GroupStatus'])) {
            $model->groupStatus = $map['GroupStatus'];
        }

        if (isset($map['SampleNames'])) {
            if (!empty($map['SampleNames'])) {
                $model->sampleNames = [];
                $n1 = 0;
                foreach ($map['SampleNames'] as $item1) {
                    $model->sampleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubTaskCount'])) {
            $model->subTaskCount = $map['SubTaskCount'];
        }

        if (isset($map['SubTaskList'])) {
            if (!empty($map['SubTaskList'])) {
                $model->subTaskList = [];
                $n1 = 0;
                foreach ($map['SubTaskList'] as $item1) {
                    $model->subTaskList[$n1] = subTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tab'])) {
            $model->tab = $map['Tab'];
        }

        if (isset($map['TaskGroupId'])) {
            $model->taskGroupId = $map['TaskGroupId'];
        }

        if (isset($map['TaskGroupName'])) {
            $model->taskGroupName = $map['TaskGroupName'];
        }

        return $model;
    }
}
