<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Bailian\V20231229\Models\ListPublishedAgentResponseBody\data\list_\applicationConfig;

class list_ extends Model
{
    /**
     * @var applicationConfig
     */
    public $applicationConfig;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

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
    public $subType;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'applicationConfig' => 'applicationConfig',
        'code' => 'code',
        'description' => 'description',
        'instructions' => 'instructions',
        'modelId' => 'modelId',
        'name' => 'name',
        'subType' => 'subType',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->applicationConfig) {
            $this->applicationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfig) {
            $res['applicationConfig'] = null !== $this->applicationConfig ? $this->applicationConfig->toArray($noStream) : $this->applicationConfig;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
