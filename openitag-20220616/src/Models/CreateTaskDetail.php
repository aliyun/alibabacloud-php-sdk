<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskDetail\admins;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\CreateTaskDetail\taskWorkflow;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @var TaskAssginConfig
     */
    public $assignConfig;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @var string
     */
    public $taskName;

    /**
     * @var TaskTemplateConfig
     */
    public $taskTemplateConfig;

    /**
     * @description This parameter is required.
     *
     * @var taskWorkflow[]
     */
    public $taskWorkflow;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $templateId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $UUID;

    /**
     * @var CreateTaskDetailVoteInfo[]
     */
    public $voteConfigs;
    protected $_name = [
        'admins'                => 'Admins',
        'allowAppendData'       => 'AllowAppendData',
        'assignConfig'          => 'AssignConfig',
        'datasetProxyRelations' => 'DatasetProxyRelations',
        'exif'                  => 'Exif',
        'tags'                  => 'Tags',
        'taskName'              => 'TaskName',
        'taskTemplateConfig'    => 'TaskTemplateConfig',
        'taskWorkflow'          => 'TaskWorkflow',
        'templateId'            => 'TemplateId',
        'UUID'                  => 'UUID',
        'voteConfigs'           => 'VoteConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->admins) {
            $res['Admins'] = null !== $this->admins ? $this->admins->toMap() : null;
        }
        if (null !== $this->allowAppendData) {
            $res['AllowAppendData'] = $this->allowAppendData;
        }
        if (null !== $this->assignConfig) {
            $res['AssignConfig'] = null !== $this->assignConfig ? $this->assignConfig->toMap() : null;
        }
        if (null !== $this->datasetProxyRelations) {
            $res['DatasetProxyRelations'] = [];
            if (null !== $this->datasetProxyRelations && \is_array($this->datasetProxyRelations)) {
                $n = 0;
                foreach ($this->datasetProxyRelations as $item) {
                    $res['DatasetProxyRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->exif) {
            $res['Exif'] = $this->exif;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskTemplateConfig) {
            $res['TaskTemplateConfig'] = null !== $this->taskTemplateConfig ? $this->taskTemplateConfig->toMap() : null;
        }
        if (null !== $this->taskWorkflow) {
            $res['TaskWorkflow'] = [];
            if (null !== $this->taskWorkflow && \is_array($this->taskWorkflow)) {
                $n = 0;
                foreach ($this->taskWorkflow as $item) {
                    $res['TaskWorkflow'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['VoteConfigs'] = [];
            if (null !== $this->voteConfigs && \is_array($this->voteConfigs)) {
                foreach ($this->voteConfigs as $key => $val) {
                    $res['VoteConfigs'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskDetail
     */
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
                $n                            = 0;
                foreach ($map['DatasetProxyRelations'] as $item) {
                    $model->datasetProxyRelations[$n++] = null !== $item ? DatasetProxyConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Exif'])) {
            $model->exif = $map['Exif'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
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
                $n                   = 0;
                foreach ($map['TaskWorkflow'] as $item) {
                    $model->taskWorkflow[$n++] = null !== $item ? taskWorkflow::fromMap($item) : $item;
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
            $model->voteConfigs = $map['VoteConfigs'];
        }

        return $model;
    }
}
