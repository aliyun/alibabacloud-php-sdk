<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetCodeSourceResponseBody extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example master
     *
     * @var string
     */
    public $codeBranch;

    /**
     * @example 44da10***********
     *
     * @var string
     */
    public $codeCommit;

    /**
     * @example https://code.aliyun.com/pai-dlc/examples.git
     *
     * @var string
     */
    public $codeRepo;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $codeRepoAccessToken;

    /**
     * @example user1
     *
     * @var string
     */
    public $codeRepoUserName;

    /**
     * @example code-202**********
     *
     * @var string
     */
    public $codeSourceId;

    /**
     * @example This is my data source 1.
     *
     * @var string
     */
    public $description;

    /**
     * @example MyCodeSource1
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2021-01-12T23:36:01.123Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T23:36:01.123Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @example /root/code
     *
     * @var string
     */
    public $mountPath;

    /**
     * @example 5A14FA81-DD4E-******-6343FE44B941
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1722********
     *
     * @var string
     */
    public $userId;

    /**
     * @example 1234
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'       => 'Accessibility',
        'codeBranch'          => 'CodeBranch',
        'codeCommit'          => 'CodeCommit',
        'codeRepo'            => 'CodeRepo',
        'codeRepoAccessToken' => 'CodeRepoAccessToken',
        'codeRepoUserName'    => 'CodeRepoUserName',
        'codeSourceId'        => 'CodeSourceId',
        'description'         => 'Description',
        'displayName'         => 'DisplayName',
        'gmtCreateTime'       => 'GmtCreateTime',
        'gmtModifyTime'       => 'GmtModifyTime',
        'mountPath'           => 'MountPath',
        'requestId'           => 'RequestId',
        'userId'              => 'UserId',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->codeBranch) {
            $res['CodeBranch'] = $this->codeBranch;
        }
        if (null !== $this->codeCommit) {
            $res['CodeCommit'] = $this->codeCommit;
        }
        if (null !== $this->codeRepo) {
            $res['CodeRepo'] = $this->codeRepo;
        }
        if (null !== $this->codeRepoAccessToken) {
            $res['CodeRepoAccessToken'] = $this->codeRepoAccessToken;
        }
        if (null !== $this->codeRepoUserName) {
            $res['CodeRepoUserName'] = $this->codeRepoUserName;
        }
        if (null !== $this->codeSourceId) {
            $res['CodeSourceId'] = $this->codeSourceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCodeSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['CodeBranch'])) {
            $model->codeBranch = $map['CodeBranch'];
        }
        if (isset($map['CodeCommit'])) {
            $model->codeCommit = $map['CodeCommit'];
        }
        if (isset($map['CodeRepo'])) {
            $model->codeRepo = $map['CodeRepo'];
        }
        if (isset($map['CodeRepoAccessToken'])) {
            $model->codeRepoAccessToken = $map['CodeRepoAccessToken'];
        }
        if (isset($map['CodeRepoUserName'])) {
            $model->codeRepoUserName = $map['CodeRepoUserName'];
        }
        if (isset($map['CodeSourceId'])) {
            $model->codeSourceId = $map['CodeSourceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
