<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetChartRepositoryResponseBody extends Model
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
     * @description The time when the chart repository was created.
     *
     * @example 1563767620000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the instance.
     *
     * @example cri-kmsiwlxxdcva****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the request is successful. Valid values:
     *
     *   `true`: The request is successful.
     *   `false`: The request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The time when the chart repository was last modified.
     *
     * @example 1563767700000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The ID of the chart repository.
     *
     * @example crcr-c7letfwev5oq****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the chart repository.
     *
     * @example test
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the chart repository belongs.
     *
     * @example test
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description The status of the chart repository. Valid values:
     *
     *   `NORMAL`: The repository is normal.
     *   `DELETING`: The repository is being deleted.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $repoStatus;

    /**
     * @description The type of the chart repository. Valid values:
     *
     *   `PUBLIC`: a public repository
     *   `PRIVATE`: a private repository
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The ID of the request.
     *
     * @example A3F6AB56-DEF4-4FF5-8DE4-680362C0E21F
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The summary about the chart repository.
     *
     * @example test
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'code'              => 'Code',
        'createTime'        => 'CreateTime',
        'instanceId'        => 'InstanceId',
        'isSuccess'         => 'IsSuccess',
        'modifiedTime'      => 'ModifiedTime',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'requestId'         => 'RequestId',
        'resourceGroupId'   => 'ResourceGroupId',
        'summary'           => 'Summary',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChartRepositoryResponseBody
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
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

        return $model;
    }
}
