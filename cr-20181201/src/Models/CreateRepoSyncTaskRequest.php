<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class CreateRepoSyncTaskRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $override;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetNamespace;

    /**
     * @var string
     */
    public $targetRegionId;

    /**
     * @var string
     */
    public $targetRepoName;

    /**
     * @var string
     */
    public $targetTag;

    /**
     * @var string
     */
    public $targetUserId;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'override'         => 'Override',
        'regionId'         => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
