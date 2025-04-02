<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class CodeSourceItem extends Model
{
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
    public $codeSourceId;

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
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'codeBranch' => 'CodeBranch',
        'codeCommit' => 'CodeCommit',
        'codeRepo' => 'CodeRepo',
        'codeRepoAccessToken' => 'CodeRepoAccessToken',
        'codeRepoUserName' => 'CodeRepoUserName',
        'codeSourceId' => 'CodeSourceId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifyTime' => 'GmtModifyTime',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
