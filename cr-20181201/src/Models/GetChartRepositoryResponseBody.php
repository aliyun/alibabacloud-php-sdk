<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetChartRepositoryResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $repoStatus;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'isSuccess'         => 'IsSuccess',
        'repoNamespaceName' => 'RepoNamespaceName',
        'requestId'         => 'RequestId',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'modifiedTime'      => 'ModifiedTime',
        'instanceId'        => 'InstanceId',
        'createTime'        => 'CreateTime',
        'repoName'          => 'RepoName',
        'summary'           => 'Summary',
        'repoId'            => 'RepoId',
        'code'              => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->repoStatus) {
            $res['RepoStatus'] = $this->repoStatus;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RepoStatus'])) {
            $model->repoStatus = $map['RepoStatus'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
