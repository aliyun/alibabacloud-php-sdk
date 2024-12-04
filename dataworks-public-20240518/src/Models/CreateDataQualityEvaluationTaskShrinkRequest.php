<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataQualityEvaluationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataQualityRulesShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $dataSourceId;

    /**
     * @description 质量监控任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 数据质量校验任务实例生命周期中的回调设置，目前只支持一个阻塞调度任务的Hook
     *
     * @var string
     */
    public $hooksShrink;

    /**
     * @description 质量监控任务名称
     *
     * This parameter is required.
     * @var string
     */
    public $name;

    /**
     * @description 数据质量校验任务通知订阅配置
     *
     * @var string
     */
    public $notificationsShrink;

    /**
     * @description 项目空间Id
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description 使用数据源时的一些设置，目前只支持指定EMR的yarn队列、采集EMR表时把SQL引擎指定为SPARK-SQL
     *
     * @example { "queue": "default", "sqlEngine": "SPARK_SQL" }
     *
     * @var string
     */
    public $runtimeConf;

    /**
     * @description 参看 DataQualityTarget示例	数据质量校验任务的监控对象，参考 DataQualityTarget
     *
     * @var string
     */
    public $targetShrink;

    /**
     * @description 数据质量校验任务的触发配置
     *
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
     * @return CreateDataQualityEvaluationTaskShrinkRequest
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
