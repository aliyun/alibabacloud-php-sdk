<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class UpdateCrawlerShrinkRequest extends Model
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
     * @var string
     */
    public $optionsShrink;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduleConfigShrink;

    /**
     * @var string
     */
    public $scopeShrink;
    protected $_name = [
        'enableAiComment' => 'EnableAiComment',
        'id' => 'Id',
        'optionsShrink' => 'Options',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'scopeShrink' => 'Scope',
    ];

    public function validate()
    {
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

        if (null !== $this->optionsShrink) {
            $res['Options'] = $this->optionsShrink;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduleConfigShrink) {
            $res['ScheduleConfig'] = $this->scheduleConfigShrink;
        }

        if (null !== $this->scopeShrink) {
            $res['Scope'] = $this->scopeShrink;
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
            $model->optionsShrink = $map['Options'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ScheduleConfig'])) {
            $model->scheduleConfigShrink = $map['ScheduleConfig'];
        }

        if (isset($map['Scope'])) {
            $model->scopeShrink = $map['Scope'];
        }

        return $model;
    }
}
