<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateCodeSourceRequest extends Model
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
     * @example https://code.aliyun.com/******
     *
     * @var string
     */
    public $codeRepo;

    /**
     * @example ***
     *
     * @var string
     */
    public $codeRepoAccessToken;

    /**
     * @example use***
     *
     * @var string
     */
    public $codeRepoUserName;

    /**
     * @example code source of dlc examples
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example MyCodeSource1
     *
     * @var string
     */
    public $displayName;

    /**
     * @example /root/code/code-source-1
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description This parameter is required.
     *
     * @example 1234
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'       => 'Accessibility',
        'codeBranch'          => 'CodeBranch',
        'codeRepo'            => 'CodeRepo',
        'codeRepoAccessToken' => 'CodeRepoAccessToken',
        'codeRepoUserName'    => 'CodeRepoUserName',
        'description'         => 'Description',
        'displayName'         => 'DisplayName',
        'mountPath'           => 'MountPath',
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
        if (null !== $this->codeRepo) {
            $res['CodeRepo'] = $this->codeRepo;
        }
        if (null !== $this->codeRepoAccessToken) {
            $res['CodeRepoAccessToken'] = $this->codeRepoAccessToken;
        }
        if (null !== $this->codeRepoUserName) {
            $res['CodeRepoUserName'] = $this->codeRepoUserName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCodeSourceRequest
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
        if (isset($map['CodeRepo'])) {
            $model->codeRepo = $map['CodeRepo'];
        }
        if (isset($map['CodeRepoAccessToken'])) {
            $model->codeRepoAccessToken = $map['CodeRepoAccessToken'];
        }
        if (isset($map['CodeRepoUserName'])) {
            $model->codeRepoUserName = $map['CodeRepoUserName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
