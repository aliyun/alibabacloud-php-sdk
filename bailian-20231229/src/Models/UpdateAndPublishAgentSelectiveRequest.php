<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\applicationConfig;
use AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\sampleLibrary;
use AlibabaCloud\Tea\Model;

class UpdateAndPublishAgentSelectiveRequest extends Model
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfig) {
            $res['applicationConfig'] = null !== $this->applicationConfig ? $this->applicationConfig->toMap() : null;
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
            $res['sampleLibrary'] = null !== $this->sampleLibrary ? $this->sampleLibrary->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAndPublishAgentSelectiveRequest
     */
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
