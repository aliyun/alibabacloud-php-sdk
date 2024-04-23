<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetArtifactLifecycleRuleResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $auto;

    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example 1571926439000
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
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example 1638259914000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example test-namespace
     *
     * @var string
     */
    public $namespaceName;

    /**
     * @example 1701878400000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @example test-repo
     *
     * @var string
     */
    public $repoName;

    /**
     * @example 724402D0-75CD-4794-BC20-7D37208****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 30
     *
     * @var int
     */
    public $retentionTagCount;

    /**
     * @example cralr-a18bkiajy8****
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
        'code'              => 'Code',
        'createTime'        => 'CreateTime',
        'enableDeleteTag'   => 'EnableDeleteTag',
        'instanceId'        => 'InstanceId',
        'isSuccess'         => 'IsSuccess',
        'modifiedTime'      => 'ModifiedTime',
        'namespaceName'     => 'NamespaceName',
        'nextTime'          => 'NextTime',
        'repoName'          => 'RepoName',
        'requestId'         => 'RequestId',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetArtifactLifecycleRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auto'])) {
            $model->auto = $map['Auto'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
