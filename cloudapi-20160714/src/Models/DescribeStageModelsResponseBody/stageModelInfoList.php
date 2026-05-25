<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeStageModelsResponseBody;

use AlibabaCloud\Dara\Model;

class stageModelInfoList extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $stageAlias;

    /**
     * @var string
     */
    public $stageModelId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'description' => 'Description',
        'modifiedTime' => 'ModifiedTime',
        'stageAlias' => 'StageAlias',
        'stageModelId' => 'StageModelId',
        'stageName' => 'StageName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->stageAlias) {
            $res['StageAlias'] = $this->stageAlias;
        }

        if (null !== $this->stageModelId) {
            $res['StageModelId'] = $this->stageModelId;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['StageAlias'])) {
            $model->stageAlias = $map['StageAlias'];
        }

        if (isset($map['StageModelId'])) {
            $model->stageModelId = $map['StageModelId'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
