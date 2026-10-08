<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTasksRequest;

use AlibabaCloud\Dara\Model;

class batchTaskQuery extends Model
{
    /**
     * @var bool
     */
    public $conditionScheduleEnable;

    /**
     * @var int
     */
    public $createBeginTime;

    /**
     * @var int
     */
    public $createEndTime;

    /**
     * @var string[]
     */
    public $developOwnerList;

    /**
     * @var string[]
     */
    public $directoryList;

    /**
     * @var bool
     */
    public $includeSubDirectory;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $lastSubmitStatusList;

    /**
     * @var string[]
     */
    public $lockUserList;

    /**
     * @var int
     */
    public $modifiedBeginTime;

    /**
     * @var int
     */
    public $modifiedEndTime;

    /**
     * @var int[]
     */
    public $nodeStatusList;

    /**
     * @var string[]
     */
    public $opsOwnerList;

    /**
     * @var string[]
     */
    public $outputTableNameList;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var bool
     */
    public $published;

    /**
     * @var string
     */
    public $refCodeTemplateId;

    /**
     * @var string[]
     */
    public $scheduleIntervalTypeList;

    /**
     * @var int[]
     */
    public $taskStatusList;

    /**
     * @var string[]
     */
    public $taskTagList;

    /**
     * @var int[]
     */
    public $taskTypeList;
    protected $_name = [
        'conditionScheduleEnable' => 'ConditionScheduleEnable',
        'createBeginTime' => 'CreateBeginTime',
        'createEndTime' => 'CreateEndTime',
        'developOwnerList' => 'DevelopOwnerList',
        'directoryList' => 'DirectoryList',
        'includeSubDirectory' => 'IncludeSubDirectory',
        'keyword' => 'Keyword',
        'lastSubmitStatusList' => 'LastSubmitStatusList',
        'lockUserList' => 'LockUserList',
        'modifiedBeginTime' => 'ModifiedBeginTime',
        'modifiedEndTime' => 'ModifiedEndTime',
        'nodeStatusList' => 'NodeStatusList',
        'opsOwnerList' => 'OpsOwnerList',
        'outputTableNameList' => 'OutputTableNameList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'published' => 'Published',
        'refCodeTemplateId' => 'RefCodeTemplateId',
        'scheduleIntervalTypeList' => 'ScheduleIntervalTypeList',
        'taskStatusList' => 'TaskStatusList',
        'taskTagList' => 'TaskTagList',
        'taskTypeList' => 'TaskTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->developOwnerList)) {
            Model::validateArray($this->developOwnerList);
        }
        if (\is_array($this->directoryList)) {
            Model::validateArray($this->directoryList);
        }
        if (\is_array($this->lastSubmitStatusList)) {
            Model::validateArray($this->lastSubmitStatusList);
        }
        if (\is_array($this->lockUserList)) {
            Model::validateArray($this->lockUserList);
        }
        if (\is_array($this->nodeStatusList)) {
            Model::validateArray($this->nodeStatusList);
        }
        if (\is_array($this->opsOwnerList)) {
            Model::validateArray($this->opsOwnerList);
        }
        if (\is_array($this->outputTableNameList)) {
            Model::validateArray($this->outputTableNameList);
        }
        if (\is_array($this->scheduleIntervalTypeList)) {
            Model::validateArray($this->scheduleIntervalTypeList);
        }
        if (\is_array($this->taskStatusList)) {
            Model::validateArray($this->taskStatusList);
        }
        if (\is_array($this->taskTagList)) {
            Model::validateArray($this->taskTagList);
        }
        if (\is_array($this->taskTypeList)) {
            Model::validateArray($this->taskTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionScheduleEnable) {
            $res['ConditionScheduleEnable'] = $this->conditionScheduleEnable;
        }

        if (null !== $this->createBeginTime) {
            $res['CreateBeginTime'] = $this->createBeginTime;
        }

        if (null !== $this->createEndTime) {
            $res['CreateEndTime'] = $this->createEndTime;
        }

        if (null !== $this->developOwnerList) {
            if (\is_array($this->developOwnerList)) {
                $res['DevelopOwnerList'] = [];
                $n1 = 0;
                foreach ($this->developOwnerList as $item1) {
                    $res['DevelopOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directoryList) {
            if (\is_array($this->directoryList)) {
                $res['DirectoryList'] = [];
                $n1 = 0;
                foreach ($this->directoryList as $item1) {
                    $res['DirectoryList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeSubDirectory) {
            $res['IncludeSubDirectory'] = $this->includeSubDirectory;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->lastSubmitStatusList) {
            if (\is_array($this->lastSubmitStatusList)) {
                $res['LastSubmitStatusList'] = [];
                $n1 = 0;
                foreach ($this->lastSubmitStatusList as $item1) {
                    $res['LastSubmitStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lockUserList) {
            if (\is_array($this->lockUserList)) {
                $res['LockUserList'] = [];
                $n1 = 0;
                foreach ($this->lockUserList as $item1) {
                    $res['LockUserList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifiedBeginTime) {
            $res['ModifiedBeginTime'] = $this->modifiedBeginTime;
        }

        if (null !== $this->modifiedEndTime) {
            $res['ModifiedEndTime'] = $this->modifiedEndTime;
        }

        if (null !== $this->nodeStatusList) {
            if (\is_array($this->nodeStatusList)) {
                $res['NodeStatusList'] = [];
                $n1 = 0;
                foreach ($this->nodeStatusList as $item1) {
                    $res['NodeStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->opsOwnerList) {
            if (\is_array($this->opsOwnerList)) {
                $res['OpsOwnerList'] = [];
                $n1 = 0;
                foreach ($this->opsOwnerList as $item1) {
                    $res['OpsOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->outputTableNameList) {
            if (\is_array($this->outputTableNameList)) {
                $res['OutputTableNameList'] = [];
                $n1 = 0;
                foreach ($this->outputTableNameList as $item1) {
                    $res['OutputTableNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->published) {
            $res['Published'] = $this->published;
        }

        if (null !== $this->refCodeTemplateId) {
            $res['RefCodeTemplateId'] = $this->refCodeTemplateId;
        }

        if (null !== $this->scheduleIntervalTypeList) {
            if (\is_array($this->scheduleIntervalTypeList)) {
                $res['ScheduleIntervalTypeList'] = [];
                $n1 = 0;
                foreach ($this->scheduleIntervalTypeList as $item1) {
                    $res['ScheduleIntervalTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskStatusList) {
            if (\is_array($this->taskStatusList)) {
                $res['TaskStatusList'] = [];
                $n1 = 0;
                foreach ($this->taskStatusList as $item1) {
                    $res['TaskStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskTagList) {
            if (\is_array($this->taskTagList)) {
                $res['TaskTagList'] = [];
                $n1 = 0;
                foreach ($this->taskTagList as $item1) {
                    $res['TaskTagList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskTypeList) {
            if (\is_array($this->taskTypeList)) {
                $res['TaskTypeList'] = [];
                $n1 = 0;
                foreach ($this->taskTypeList as $item1) {
                    $res['TaskTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ConditionScheduleEnable'])) {
            $model->conditionScheduleEnable = $map['ConditionScheduleEnable'];
        }

        if (isset($map['CreateBeginTime'])) {
            $model->createBeginTime = $map['CreateBeginTime'];
        }

        if (isset($map['CreateEndTime'])) {
            $model->createEndTime = $map['CreateEndTime'];
        }

        if (isset($map['DevelopOwnerList'])) {
            if (!empty($map['DevelopOwnerList'])) {
                $model->developOwnerList = [];
                $n1 = 0;
                foreach ($map['DevelopOwnerList'] as $item1) {
                    $model->developOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DirectoryList'])) {
            if (!empty($map['DirectoryList'])) {
                $model->directoryList = [];
                $n1 = 0;
                foreach ($map['DirectoryList'] as $item1) {
                    $model->directoryList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeSubDirectory'])) {
            $model->includeSubDirectory = $map['IncludeSubDirectory'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['LastSubmitStatusList'])) {
            if (!empty($map['LastSubmitStatusList'])) {
                $model->lastSubmitStatusList = [];
                $n1 = 0;
                foreach ($map['LastSubmitStatusList'] as $item1) {
                    $model->lastSubmitStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LockUserList'])) {
            if (!empty($map['LockUserList'])) {
                $model->lockUserList = [];
                $n1 = 0;
                foreach ($map['LockUserList'] as $item1) {
                    $model->lockUserList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifiedBeginTime'])) {
            $model->modifiedBeginTime = $map['ModifiedBeginTime'];
        }

        if (isset($map['ModifiedEndTime'])) {
            $model->modifiedEndTime = $map['ModifiedEndTime'];
        }

        if (isset($map['NodeStatusList'])) {
            if (!empty($map['NodeStatusList'])) {
                $model->nodeStatusList = [];
                $n1 = 0;
                foreach ($map['NodeStatusList'] as $item1) {
                    $model->nodeStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OpsOwnerList'])) {
            if (!empty($map['OpsOwnerList'])) {
                $model->opsOwnerList = [];
                $n1 = 0;
                foreach ($map['OpsOwnerList'] as $item1) {
                    $model->opsOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OutputTableNameList'])) {
            if (!empty($map['OutputTableNameList'])) {
                $model->outputTableNameList = [];
                $n1 = 0;
                foreach ($map['OutputTableNameList'] as $item1) {
                    $model->outputTableNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['Published'])) {
            $model->published = $map['Published'];
        }

        if (isset($map['RefCodeTemplateId'])) {
            $model->refCodeTemplateId = $map['RefCodeTemplateId'];
        }

        if (isset($map['ScheduleIntervalTypeList'])) {
            if (!empty($map['ScheduleIntervalTypeList'])) {
                $model->scheduleIntervalTypeList = [];
                $n1 = 0;
                foreach ($map['ScheduleIntervalTypeList'] as $item1) {
                    $model->scheduleIntervalTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = [];
                $n1 = 0;
                foreach ($map['TaskStatusList'] as $item1) {
                    $model->taskStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskTagList'])) {
            if (!empty($map['TaskTagList'])) {
                $model->taskTagList = [];
                $n1 = 0;
                foreach ($map['TaskTagList'] as $item1) {
                    $model->taskTagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskTypeList'])) {
            if (!empty($map['TaskTypeList'])) {
                $model->taskTypeList = [];
                $n1 = 0;
                foreach ($map['TaskTypeList'] as $item1) {
                    $model->taskTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
