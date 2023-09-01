<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CodeSourceItem extends Model
{
    /**
     * @example PUBLIC
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
     * @example 44da109b59f8596152987eaa8f3b2487bb72ea63
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
     * @var string
     */
    public $codeRepoAccessToken;

    /**
     * @example user
     *
     * @var string
     */
    public $codeRepoUserName;

    /**
     * @example code-20210111103721-85qz78ia96lu
     *
     * @var string
     */
    public $codeSourceId;

    /**
     * @example code source of dlc examples
     *
     * @var string
     */
    public $description;

    /**
     * @example MyCodeSourceName1
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 2021-01-18T12:52:15Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-18T12:52:15Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @example /root/code/
     *
     * @var string
     */
    public $mountPath;

    /**
     * @example 1157290171663117
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
     * @return CodeSourceItem
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
