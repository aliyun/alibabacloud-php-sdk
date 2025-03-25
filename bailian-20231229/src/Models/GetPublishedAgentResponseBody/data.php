<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetPublishedAgentResponseBody;

use AlibabaCloud\SDK\Bailian\V20231229\Models\GetPublishedAgentResponseBody\data\applicationConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $instructions;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'applicationConfig' => 'applicationConfig',
        'code' => 'code',
        'instructions' => 'instructions',
        'modelId' => 'modelId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfig) {
            $res['applicationConfig'] = null !== $this->applicationConfig ? $this->applicationConfig->toMap() : null;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationConfig'])) {
            $model->applicationConfig = applicationConfig::fromMap($map['applicationConfig']);
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
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

        return $model;
    }
}
