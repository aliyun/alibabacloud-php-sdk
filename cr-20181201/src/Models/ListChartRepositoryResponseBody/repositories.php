<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListChartRepositoryResponseBody;

use AlibabaCloud\Tea\Model;

class repositories extends Model
{
    /**
     * @description The time when the repository was created.
     *
     * @example 1571926644000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the instance.
     *
     * @example cri-xkx6vujuhay0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the repository was last modified.
     *
     * @example 1571930329000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The ID of the repository.
     *
     * @example crcr-gpsu7b8chmxk****
     *
     * @var string
     */
    public $repoId;

    /**
     * @description The name of the repository.
     *
     * @example repo1
     *
     * @var string
     */
    public $repoName;

    /**
     * @description The name of the namespace to which the repository belongs.
     *
     * @example ns1
     *
     * @var string
     */
    public $repoNamespaceName;

    /**
     * @description The status of the repository. Valid values:
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
     * @description The type of the repository. Valid values:
     *
     *   `PRIVATE`: a private repository
     *   `PUBLIC`: a public repository
     *
     * @example PUBLIC
     *
     * @var string
     */
    public $repoType;

    /**
     * @description The ID of the resource group to which the repository belongs.
     *
     * @example rg-aek2ikd5rxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The summary about the repository.
     *
     * @example test
     *
     * @var string
     */
    public $summary;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'instanceId'        => 'InstanceId',
        'modifiedTime'      => 'ModifiedTime',
        'repoId'            => 'RepoId',
        'repoName'          => 'RepoName',
        'repoNamespaceName' => 'RepoNamespaceName',
        'repoStatus'        => 'RepoStatus',
        'repoType'          => 'RepoType',
        'resourceGroupId'   => 'ResourceGroupId',
        'summary'           => 'Summary',
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

        return $model;
    }
}
