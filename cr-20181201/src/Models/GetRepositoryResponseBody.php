<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepositoryResponseBody extends Model
{
    /**
     * @description The return value.
     *
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the repository was created.
     *
     * @example 1570759546000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The details of the repository.
     *
     * @example test
     *
     * @var string
     */
    public $detail;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The time when the repository was last modified.
     *
     * @example 1570759546100
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description Indicates how the repository was created. Valid values:
     *
     *   `MANUAL`: The repository was manually created.
     *   `AUTO`: The repository was automatically created.
     *
     * @example MANUAL
     *
     * @var string
     */
    public $repoBuildType;

    /**
     * @description The ID of the repository.
     *
     * @example crr-l5eoubonp0l****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the repository.
     *
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace.
     *
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description The status of the repository.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $repoStatus;

    /**
     * @description The type of the repository. Valid values:
     *
     *   `PUBLIC`: public repository.
     *   `PRIVATE`: private repository.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The ID of the request.
     *
     * @example 915E6734-3E50-4640-8DBA-126D2D94DE29
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The summary of the repository.
     *
     * @example Automatically created repository
     *
     * @var string
     */
    public $summary;

    /**
     * @description Indicates whether the feature of image tag immutability is enabled. Valid values:
     *
     *   `true`: The feature of image tag immutability is enabled.
     *   `false`: The feature of image tag immutability is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $tagImmutability;
    protected $_name = [
        'code'              => 'Code',
        'createTime'        => 'CreateTime',
        'detail'            => 'Detail',
        'instanceId'        => 'InstanceId',
        'isSuccess'         => 'IsSuccess',
        'modifiedTime'      => 'ModifiedTime',
        'repoBuildType'     => 'RepoBuildType',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'requestId'         => 'RequestId',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetRepositoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
