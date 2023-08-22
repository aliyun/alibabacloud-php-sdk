<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSyncTaskRequest extends Model
{
    /**
     * @example cri-hpdfkc6utbaq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $override;

    /**
     * @example crr-iql7jalx4g0****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example tag1
     *
     * @var string
     */
    public $tag;

    /**
     * @example cri-ibxs3piklys3****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @example ns1
     *
     * @var string
     */
    public $targetNamespace;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $targetRegionId;

    /**
     * @example repo1
     *
     * @var string
     */
    public $targetRepoName;

    /**
     * @example tag1
     *
     * @var string
     */
    public $targetTag;

    /**
     * @example 12345***
     *
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'override'         => 'Override',
        'repoId'           => 'RepoId',
        'tag'              => 'Tag',
        'targetInstanceId' => 'TargetInstanceId',
        'targetNamespace'  => 'TargetNamespace',
        'targetRegionId'   => 'TargetRegionId',
        'targetRepoName'   => 'TargetRepoName',
        'targetTag'        => 'TargetTag',
        'targetUserId'     => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->override) {
            $res['Override'] = $this->override;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetNamespace) {
            $res['TargetNamespace'] = $this->targetNamespace;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }
        if (null !== $this->targetRepoName) {
            $res['TargetRepoName'] = $this->targetRepoName;
        }
        if (null !== $this->targetTag) {
            $res['TargetTag'] = $this->targetTag;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRepoSyncTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Override'])) {
            $model->override = $map['Override'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetNamespace'])) {
            $model->targetNamespace = $map['TargetNamespace'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }
        if (isset($map['TargetRepoName'])) {
            $model->targetRepoName = $map['TargetRepoName'];
        }
        if (isset($map['TargetTag'])) {
            $model->targetTag = $map['TargetTag'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
