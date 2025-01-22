<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataQualityEvaluationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataQualityRulesShrink;
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $hooksShrink;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $notificationsShrink;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string
     */
    public $runtimeConf;
    /**
     * @var string
     */
    public $targetShrink;
    /**
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'dataQualityRulesShrink' => 'DataQualityRules',
        'dataSourceId'           => 'DataSourceId',
        'description'            => 'Description',
        'hooksShrink'            => 'Hooks',
        'name'                   => 'Name',
        'notificationsShrink'    => 'Notifications',
        'projectId'              => 'ProjectId',
        'runtimeConf'            => 'RuntimeConf',
        'targetShrink'           => 'Target',
        'triggerShrink'          => 'Trigger',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityRulesShrink) {
            $res['DataQualityRules'] = $this->dataQualityRulesShrink;
        }

        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hooksShrink) {
            $res['Hooks'] = $this->hooksShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->notificationsShrink) {
            $res['Notifications'] = $this->notificationsShrink;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->runtimeConf) {
            $res['RuntimeConf'] = $this->runtimeConf;
        }

        if (null !== $this->targetShrink) {
            $res['Target'] = $this->targetShrink;
        }

        if (null !== $this->triggerShrink) {
            $res['Trigger'] = $this->triggerShrink;
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
        if (isset($map['DataQualityRules'])) {
            $model->dataQualityRulesShrink = $map['DataQualityRules'];
        }

        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Hooks'])) {
            $model->hooksShrink = $map['Hooks'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Notifications'])) {
            $model->notificationsShrink = $map['Notifications'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RuntimeConf'])) {
            $model->runtimeConf = $map['RuntimeConf'];
        }

        if (isset($map['Target'])) {
            $model->targetShrink = $map['Target'];
        }

        if (isset($map['Trigger'])) {
            $model->triggerShrink = $map['Trigger'];
        }

        return $model;
    }
}
