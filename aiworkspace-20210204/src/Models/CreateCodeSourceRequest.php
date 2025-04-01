<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateCodeSourceRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $codeBranch;

    /**
     * @var string
     */
    public $codeCommit;

    /**
     * @var string
     */
    public $codeRepo;

    /**
     * @var string
     */
    public $codeRepoAccessToken;

    /**
     * @var string
     */
    public $codeRepoUserName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'codeBranch' => 'CodeBranch',
        'codeCommit' => 'CodeCommit',
        'codeRepo' => 'CodeRepo',
        'codeRepoAccessToken' => 'CodeRepoAccessToken',
        'codeRepoUserName' => 'CodeRepoUserName',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'mountPath' => 'MountPath',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
