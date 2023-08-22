<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListRepositoryResponseBody;

use AlibabaCloud\Tea\Model;

class repositories extends Model
{
    /**
     * @example 1564153576000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example cri-kmsiwlxxdcv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1564153576000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example MANUAL
     *
     * @var string
     */
    public $repoBuildType;

    /**
     * @example crr-03cuozrsqhkw****
     *
     * @var string
     */
    public $repoId;

    /**
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $repoStatus;

    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example test OK
     *
     * @var string
     */
    public $summary;

    /**
     * @example true
     *
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'instanceId'        => 'InstanceId',
        'modifiedTime'      => 'ModifiedTime',
        'repoBuildType'     => 'RepoBuildType',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'resourceGroupId'   => 'ResourceGroupId',
        'summary'           => 'Summary',
        'tagImmutability'   => 'TagImmutability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->repoBuildType) {
            $res['RepoBuildType'] = $this->repoBuildType;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->repoStatus) {
            $res['RepoStatus'] = $this->repoStatus;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repositories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RepoBuildType'])) {
            $model->repoBuildType = $map['RepoBuildType'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['RepoStatus'])) {
            $model->repoStatus = $map['RepoStatus'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }

        return $model;
    }
}
