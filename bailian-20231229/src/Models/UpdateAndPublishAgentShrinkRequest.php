<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class UpdateAndPublishAgentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationConfigShrink;

    /**
     * @var string
     */
    public $instructions;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sampleLibraryShrink;
    protected $_name = [
        'applicationConfigShrink' => 'applicationConfig',
        'instructions' => 'instructions',
        'modelId' => 'modelId',
        'name' => 'name',
        'sampleLibraryShrink' => 'sampleLibrary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigShrink) {
            $res['applicationConfig'] = $this->applicationConfigShrink;
        }

        if (null !== $this->instructions) {
            $res['instructions'] = $this->instructions;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->sampleLibraryShrink) {
            $res['sampleLibrary'] = $this->sampleLibraryShrink;
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
        if (isset($map['applicationConfig'])) {
            $model->applicationConfigShrink = $map['applicationConfig'];
        }

        if (isset($map['instructions'])) {
            $model->instructions = $map['instructions'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['sampleLibrary'])) {
            $model->sampleLibraryShrink = $map['sampleLibrary'];
        }

        return $model;
    }
}
