<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListArtifactLifecycleRuleResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $auto;

    /**
     * @example 1638187989000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableDeleteTag;

    /**
     * @example cri-brlg4cbj2yl****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1678341923385
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example test-ns
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @example 1638187989000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @example test_1
     *
     * @var string
     */
    public $repoName;

    /**
     * @example 30
     *
     * @var int
     */
    public $retentionTagCount;

    /**
     * @example cralr-yqx1q5sir6d****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example WEEK
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @example INSTANCE
     *
     * @var string
     */
    public $scope;

    /**
     * @example .*-alpine
     *
     * @var string
     */
    public $tagRegexp;
    protected $_name = [
        'auto'              => 'Auto',
        'createTime'        => 'CreateTime',
        'enableDeleteTag'   => 'EnableDeleteTag',
        'instanceId'        => 'InstanceId',
        'modifiedTime'      => 'ModifiedTime',
        'namespaceName'     => 'NamespaceName',
        'nextTime'          => 'NextTime',
        'repoName'          => 'RepoName',
        'retentionTagCount' => 'RetentionTagCount',
        'ruleId'            => 'RuleId',
        'scheduleTime'      => 'ScheduleTime',
        'scope'             => 'Scope',
        'tagRegexp'         => 'TagRegexp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auto) {
            $res['Auto'] = $this->auto;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableDeleteTag) {
            $res['EnableDeleteTag'] = $this->enableDeleteTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }
        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->retentionTagCount) {
            $res['RetentionTagCount'] = $this->retentionTagCount;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->tagRegexp) {
            $res['TagRegexp'] = $this->tagRegexp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auto'])) {
            $model->auto = $map['Auto'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableDeleteTag'])) {
            $model->enableDeleteTag = $map['EnableDeleteTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }
        if (isset($map['NextTime'])) {
            $model->nextTime = $map['NextTime'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RetentionTagCount'])) {
            $model->retentionTagCount = $map['RetentionTagCount'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['TagRegexp'])) {
            $model->tagRegexp = $map['TagRegexp'];
        }

        return $model;
    }
}
