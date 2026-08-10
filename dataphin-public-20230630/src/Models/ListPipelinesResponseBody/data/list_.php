<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPipelinesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string[]
     */
    public $developOwners;

    /**
     * @var string
     */
    public $directory;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $opsOwners;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $scheduleType;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $taskType;
    protected $_name = [
        'developOwners' => 'DevelopOwners',
        'directory' => 'Directory',
        'fileId' => 'FileId',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'opsOwners' => 'OpsOwners',
        'pipelineId' => 'PipelineId',
        'scheduleType' => 'ScheduleType',
        'tags' => 'Tags',
        'taskStatus' => 'TaskStatus',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        if (\is_array($this->developOwners)) {
            Model::validateArray($this->developOwners);
        }
        if (\is_array($this->opsOwners)) {
            Model::validateArray($this->opsOwners);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->developOwners) {
            if (\is_array($this->developOwners)) {
                $res['DevelopOwners'] = [];
                $n1 = 0;
                foreach ($this->developOwners as $item1) {
                    $res['DevelopOwners'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->opsOwners) {
            if (\is_array($this->opsOwners)) {
                $res['OpsOwners'] = [];
                $n1 = 0;
                foreach ($this->opsOwners as $item1) {
                    $res['OpsOwners'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['DevelopOwners'])) {
            if (!empty($map['DevelopOwners'])) {
                $model->developOwners = [];
                $n1 = 0;
                foreach ($map['DevelopOwners'] as $item1) {
                    $model->developOwners[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['OpsOwners'])) {
            if (!empty($map['OpsOwners'])) {
                $model->opsOwners = [];
                $n1 = 0;
                foreach ($map['OpsOwners'] as $item1) {
                    $model->opsOwners[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
