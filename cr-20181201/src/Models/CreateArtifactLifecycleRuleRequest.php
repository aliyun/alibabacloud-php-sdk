<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateArtifactLifecycleRuleRequest extends Model
{
    /**
     * @var bool
     */
    public $auto;

    /**
     * @var bool
     */
    public $enableDeleteTag;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var int
     */
    public $retentionTagCount;

    /**
     * @var string
     */
    public $scheduleTime;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tagRegexp;
    protected $_name = [
        'auto' => 'Auto',
        'enableDeleteTag' => 'EnableDeleteTag',
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'repoName' => 'RepoName',
        'retentionTagCount' => 'RetentionTagCount',
        'scheduleTime' => 'ScheduleTime',
        'scope' => 'Scope',
        'tagRegexp' => 'TagRegexp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
