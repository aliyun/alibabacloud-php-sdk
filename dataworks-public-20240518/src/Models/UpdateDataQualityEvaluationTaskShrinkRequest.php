<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateDataQualityEvaluationTaskShrinkRequest extends Model
{
    /**
     * @description The list of monitoring rules that are associated with the monitor.
     *
     * @var string
     */
    public $dataQualityRulesShrink;

    /**
     * @description The data source ID. You can call the [ListDataSources](https://help.aliyun.com/document_detail/211431.html) operation to query the ID.
     *
     * @example 358750
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description The description of the monitor.
     *
     * @var string
     */
    public $description;

    /**
     * @description The hook.
     *
     * @var string
     */
    public $hooksShrink;

    /**
     * @description The ID of the monitor.
     *
     * This parameter is required.
     * @example 7227061794
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the monitor.
     *
     * @var string
     */
    public $name;

    /**
     * @description The configurations of alert notifications.
     *
     * @var string
     */
    public $notificationsShrink;

    /**
     * @description The ID of the DataWorks workspace.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The extended configurations in JSON-formatted strings. You can use this parameter only for monitors that are used to monitor the quality of E-MapReduce (EMR) data.
     *
     *   queue: The Yarn queue used when a monitor checks the quality of EMR data. By default, the queue configured for the current workspace is used.
     *
     *   sqlEngine: The SQL engine used when a monitor checks the quality of EMR data.
     *
     *   HIVE_SQL
     *   SPARK_SQL
     *
     * @example { "queue": "default", "sqlEngine": "SPARK_SQL" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @description The monitored object of the data quality monitoring task.
     *
     * @var string
     */
    public $targetShrink;

    /**
     * @description The trigger configuration of the monitor.
     *
     * @var string
     */
    public $triggerShrink;
    protected $_name = [
        'dataQualityRulesShrink' => 'DataQualityRules',
        'dataSourceId'           => 'DataSourceId',
        'description'            => 'Description',
        'hooksShrink'            => 'Hooks',
        'id'                     => 'Id',
        'name'                   => 'Name',
        'notificationsShrink'    => 'Notifications',
        'projectId'              => 'ProjectId',
        'runtimeConf'            => 'RuntimeConf',
        'targetShrink'           => 'Target',
        'triggerShrink'          => 'Trigger',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

    /**
     * @param array $map
     *
     * @return UpdateDataQualityEvaluationTaskShrinkRequest
     */
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
