<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\applicationConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentRequest\sampleLibrary;

class UpdateAndPublishAgentRequest extends Model
{
    /**
     * @var applicationConfig
     */
    public $applicationConfig;

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
     * @var sampleLibrary
     */
    public $sampleLibrary;
    protected $_name = [
        'applicationConfig' => 'applicationConfig',
        'instructions' => 'instructions',
        'modelId' => 'modelId',
        'name' => 'name',
        'sampleLibrary' => 'sampleLibrary',
    ];

    public function validate()
    {
        if (null !== $this->applicationConfig) {
            $this->applicationConfig->validate();
        }
        if (null !== $this->sampleLibrary) {
            $this->sampleLibrary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfig) {
            $res['applicationConfig'] = null !== $this->applicationConfig ? $this->applicationConfig->toArray($noStream) : $this->applicationConfig;
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

        if (null !== $this->sampleLibrary) {
            $res['sampleLibrary'] = null !== $this->sampleLibrary ? $this->sampleLibrary->toArray($noStream) : $this->sampleLibrary;
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
            $model->applicationConfig = applicationConfig::fromMap($map['applicationConfig']);
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
            $model->sampleLibrary = sampleLibrary::fromMap($map['sampleLibrary']);
        }

        return $model;
    }
}
