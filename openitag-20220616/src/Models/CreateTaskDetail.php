<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskDetail\admins;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskDetail\taskWorkflow;

class CreateTaskDetail extends Model
{
    /**
     * @var admins
     */
    public $admins;

    /**
     * @var bool
     */
    public $allowAppendData;

    /**
     * @var TaskAssginConfig
     */
    public $assignConfig;

    /**
     * @var DatasetProxyConfig[]
     */
    public $datasetProxyRelations;

    /**
     * @var mixed[]
     */
    public $exif;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var TaskTemplateConfig
     */
    public $taskTemplateConfig;

    /**
     * @var taskWorkflow[]
     */
    public $taskWorkflow;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var CreateTaskDetailVoteInfo[]
     */
    public $voteConfigs;
    protected $_name = [
        'admins' => 'Admins',
        'allowAppendData' => 'AllowAppendData',
        'assignConfig' => 'AssignConfig',
        'datasetProxyRelations' => 'DatasetProxyRelations',
        'exif' => 'Exif',
        'tags' => 'Tags',
        'taskName' => 'TaskName',
        'taskTemplateConfig' => 'TaskTemplateConfig',
        'taskWorkflow' => 'TaskWorkflow',
        'templateId' => 'TemplateId',
        'UUID' => 'UUID',
        'voteConfigs' => 'VoteConfigs',
    ];

    public function validate()
    {
        if (null !== $this->admins) {
            $this->admins->validate();
        }
        if (null !== $this->assignConfig) {
            $this->assignConfig->validate();
        }
        if (\is_array($this->datasetProxyRelations)) {
            Model::validateArray($this->datasetProxyRelations);
        }
        if (\is_array($this->exif)) {
            Model::validateArray($this->exif);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->taskTemplateConfig) {
            $this->taskTemplateConfig->validate();
        }
        if (\is_array($this->taskWorkflow)) {
            Model::validateArray($this->taskWorkflow);
        }
        if (\is_array($this->voteConfigs)) {
            Model::validateArray($this->voteConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->admins) {
            $res['Admins'] = null !== $this->admins ? $this->admins->toArray($noStream) : $this->admins;
        }

        if (null !== $this->allowAppendData) {
            $res['AllowAppendData'] = $this->allowAppendData;
        }

        if (null !== $this->assignConfig) {
            $res['AssignConfig'] = null !== $this->assignConfig ? $this->assignConfig->toArray($noStream) : $this->assignConfig;
        }

        if (null !== $this->datasetProxyRelations) {
            if (\is_array($this->datasetProxyRelations)) {
                $res['DatasetProxyRelations'] = [];
                $n1 = 0;
                foreach ($this->datasetProxyRelations as $item1) {
                    $res['DatasetProxyRelations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->exif) {
            if (\is_array($this->exif)) {
                $res['Exif'] = [];
                foreach ($this->exif as $key1 => $value1) {
                    $res['Exif'][$key1] = $value1;
                }
            }
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

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskTemplateConfig) {
            $res['TaskTemplateConfig'] = null !== $this->taskTemplateConfig ? $this->taskTemplateConfig->toArray($noStream) : $this->taskTemplateConfig;
        }

        if (null !== $this->taskWorkflow) {
            if (\is_array($this->taskWorkflow)) {
                $res['TaskWorkflow'] = [];
                $n1 = 0;
                foreach ($this->taskWorkflow as $item1) {
                    $res['TaskWorkflow'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        if (null !== $this->voteConfigs) {
            if (\is_array($this->voteConfigs)) {
                $res['VoteConfigs'] = [];
                foreach ($this->voteConfigs as $key1 => $value1) {
                    $res['VoteConfigs'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['Admins'])) {
            $model->admins = admins::fromMap($map['Admins']);
        }

        if (isset($map['AllowAppendData'])) {
            $model->allowAppendData = $map['AllowAppendData'];
        }

        if (isset($map['AssignConfig'])) {
            $model->assignConfig = TaskAssginConfig::fromMap($map['AssignConfig']);
        }

        if (isset($map['DatasetProxyRelations'])) {
            if (!empty($map['DatasetProxyRelations'])) {
                $model->datasetProxyRelations = [];
                $n1 = 0;
                foreach ($map['DatasetProxyRelations'] as $item1) {
                    $model->datasetProxyRelations[$n1] = DatasetProxyConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Exif'])) {
            if (!empty($map['Exif'])) {
                $model->exif = [];
                foreach ($map['Exif'] as $key1 => $value1) {
                    $model->exif[$key1] = $value1;
                }
            }
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

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskTemplateConfig'])) {
            $model->taskTemplateConfig = TaskTemplateConfig::fromMap($map['TaskTemplateConfig']);
        }

        if (isset($map['TaskWorkflow'])) {
            if (!empty($map['TaskWorkflow'])) {
                $model->taskWorkflow = [];
                $n1 = 0;
                foreach ($map['TaskWorkflow'] as $item1) {
                    $model->taskWorkflow[$n1] = taskWorkflow::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        if (isset($map['VoteConfigs'])) {
            if (!empty($map['VoteConfigs'])) {
                $model->voteConfigs = [];
                foreach ($map['VoteConfigs'] as $key1 => $value1) {
                    $model->voteConfigs[$key1] = CreateTaskDetailVoteInfo::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
