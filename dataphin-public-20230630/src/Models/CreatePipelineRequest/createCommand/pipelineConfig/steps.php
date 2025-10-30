<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineRequest\createCommand\pipelineConfig;

use AlibabaCloud\Dara\Model;

class steps extends Model
{
    /**
     * @var bool
     */
    public $isDistribute;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $pluginConfig;

    /**
     * @var string
     */
    public $stepName;

    /**
     * @var string
     */
    public $stepType;
    protected $_name = [
        'isDistribute' => 'IsDistribute',
        'key' => 'Key',
        'pluginConfig' => 'PluginConfig',
        'stepName' => 'StepName',
        'stepType' => 'StepType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDistribute) {
            $res['IsDistribute'] = $this->isDistribute;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->pluginConfig) {
            $res['PluginConfig'] = $this->pluginConfig;
        }

        if (null !== $this->stepName) {
            $res['StepName'] = $this->stepName;
        }

        if (null !== $this->stepType) {
            $res['StepType'] = $this->stepType;
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
        if (isset($map['IsDistribute'])) {
            $model->isDistribute = $map['IsDistribute'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['PluginConfig'])) {
            $model->pluginConfig = $map['PluginConfig'];
        }

        if (isset($map['StepName'])) {
            $model->stepName = $map['StepName'];
        }

        if (isset($map['StepType'])) {
            $model->stepType = $map['StepType'];
        }

        return $model;
    }
}
