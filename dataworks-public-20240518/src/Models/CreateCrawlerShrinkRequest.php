<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateCrawlerShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;

    /**
     * @var bool
     */
    public $enableAiComment;

    /**
     * @var string
     */
    public $name;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'enableAiComment' => 'EnableAiComment',
        'name' => 'Name',
        'optionsShrink' => 'Options',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduleConfigShrink' => 'ScheduleConfig',
        'scopeShrink' => 'Scope',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->enableAiComment) {
            $res['EnableAiComment'] = $this->enableAiComment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['EnableAiComment'])) {
            $model->enableAiComment = $map['EnableAiComment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
