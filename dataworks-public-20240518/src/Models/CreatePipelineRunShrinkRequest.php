<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreatePipelineRunShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $autoRunUntilStage;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $objectIdsShrink;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $runMode;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'autoRunUntilStage' => 'AutoRunUntilStage',
        'description' => 'Description',
        'objectIdsShrink' => 'ObjectIds',
        'projectId' => 'ProjectId',
        'runMode' => 'RunMode',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRunUntilStage) {
            $res['AutoRunUntilStage'] = $this->autoRunUntilStage;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->objectIdsShrink) {
            $res['ObjectIds'] = $this->objectIdsShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runMode) {
            $res['RunMode'] = $this->runMode;
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
        if (isset($map['AutoRunUntilStage'])) {
            $model->autoRunUntilStage = $map['AutoRunUntilStage'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ObjectIds'])) {
            $model->objectIdsShrink = $map['ObjectIds'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RunMode'])) {
            $model->runMode = $map['RunMode'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
