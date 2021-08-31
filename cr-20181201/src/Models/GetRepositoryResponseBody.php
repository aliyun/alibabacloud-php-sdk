<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepositoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $summary;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $repoStatus;

    /**
     * @var string
     */
    public $repoType;

    /**
     * @var string
     */
    public $repoBuildType;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $repoId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @var bool
     */
    public $tagImmutability;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'summary'           => 'Summary',
        'createTime'        => 'CreateTime',
        'isSuccess'         => 'IsSuccess',
        'instanceId'        => 'InstanceId',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'repoBuildType'     => 'RepoBuildType',
        'modifiedTime'      => 'ModifiedTime',
        'requestId'         => 'RequestId',
        'repoId'            => 'RepoId',
        'code'              => 'Code',
        'repoNamespaceName' => 'RepoNamespaceName',
        'tagImmutability'   => 'TagImmutability',
        'repoName'          => 'RepoName',
        'detail'            => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->repoStatus) {
            $res['RepoStatus'] = $this->repoStatus;
        }
        if (null !== $this->repoType) {
            $res['RepoType'] = $this->repoType;
        }
        if (null !== $this->repoBuildType) {
            $res['RepoBuildType'] = $this->repoBuildType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->repoId) {
            $res['RepoId'] = $this->repoId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->repoNamespaceName) {
            $res['RepoNamespaceName'] = $this->repoNamespaceName;
        }
        if (null !== $this->tagImmutability) {
            $res['TagImmutability'] = $this->tagImmutability;
        }
        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RepoStatus'])) {
            $model->repoStatus = $map['RepoStatus'];
        }
        if (isset($map['RepoType'])) {
            $model->repoType = $map['RepoType'];
        }
        if (isset($map['RepoBuildType'])) {
            $model->repoBuildType = $map['RepoBuildType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RepoId'])) {
            $model->repoId = $map['RepoId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RepoNamespaceName'])) {
            $model->repoNamespaceName = $map['RepoNamespaceName'];
        }
        if (isset($map['TagImmutability'])) {
            $model->tagImmutability = $map['TagImmutability'];
        }
        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
