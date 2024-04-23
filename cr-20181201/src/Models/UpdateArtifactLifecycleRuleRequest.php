<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class UpdateArtifactLifecycleRuleRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $auto;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableDeleteTag;

    /**
     * @example cri-r6ym0lerldp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example test-ns
     *
     * @var string
     */
    public $namespaceName;

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
     * @example cralr-luq6qiegzvx****
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
     * @example REPO
     *
     * @var string
     */
    public $scope;

    /**
     * @example .*production_.*
     *
     * @var string
     */
    public $tagRegexp;
    protected $_name = [
        'auto'              => 'Auto',
        'enableDeleteTag'   => 'EnableDeleteTag',
        'instanceId'        => 'InstanceId',
        'namespaceName'     => 'NamespaceName',
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
        if (null !== $this->enableDeleteTag) {
            $res['EnableDeleteTag'] = $this->enableDeleteTag;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
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
     * @return UpdateArtifactLifecycleRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auto'])) {
            $model->auto = $map['Auto'];
        }
        if (isset($map['EnableDeleteTag'])) {
            $model->enableDeleteTag = $map['EnableDeleteTag'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
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
