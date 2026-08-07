<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateCrawlerRequest\scheduleConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateCrawlerRequest\scope;

class UpdateCrawlerRequest extends Model
{
    /**
     * @var bool
     */
    public $enableAiComment;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $options;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var scheduleConfig
     */
    public $scheduleConfig;

    /**
     * @var scope
     */
    public $scope;
    protected $_name = [
        'enableAiComment' => 'EnableAiComment',
        'id' => 'Id',
        'options' => 'Options',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleConfig' => 'ScheduleConfig',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        if (\is_array($this->options)) {
            Model::validateArray($this->options);
        }
        if (null !== $this->scheduleConfig) {
            $this->scheduleConfig->validate();
        }
        if (null !== $this->scope) {
            $this->scope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableAiComment) {
            $res['EnableAiComment'] = $this->enableAiComment;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->options) {
            if (\is_array($this->options)) {
                $res['Options'] = [];
                foreach ($this->options as $key1 => $value1) {
                    $res['Options'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleConfig) {
            $res['ScheduleConfig'] = null !== $this->scheduleConfig ? $this->scheduleConfig->toArray($noStream) : $this->scheduleConfig;
        }

        if (null !== $this->scope) {
            $res['Scope'] = null !== $this->scope ? $this->scope->toArray($noStream) : $this->scope;
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
        if (isset($map['EnableAiComment'])) {
            $model->enableAiComment = $map['EnableAiComment'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Options'])) {
            if (!empty($map['Options'])) {
                $model->options = [];
                foreach ($map['Options'] as $key1 => $value1) {
                    $model->options[$key1] = $value1;
                }
            }
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfig = scheduleConfig::fromMap($map['ScheduleConfig']);
        }

        if (isset($map['Scope'])) {
            $model->scope = scope::fromMap($map['Scope']);
        }

        return $model;
    }
}
