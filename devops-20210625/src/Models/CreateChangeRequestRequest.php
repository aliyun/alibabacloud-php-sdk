<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateChangeRequestRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example sn123
     *
     * @var string
     */
    public $appCodeRepoSn;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoDeleteBranchWhenEnd;

    /**
     * @description This parameter is required.
     *
     * @example hotfix/20240524
     *
     * @var string
     */
    public $branchName;

    /**
     * @example false
     *
     * @var bool
     */
    public $createBranch;

    /**
     * @example 1332695887xxxxxx
     *
     * @var string
     */
    public $ownerAccountId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'appCodeRepoSn'           => 'appCodeRepoSn',
        'autoDeleteBranchWhenEnd' => 'autoDeleteBranchWhenEnd',
        'branchName'              => 'branchName',
        'createBranch'            => 'createBranch',
        'ownerAccountId'          => 'ownerAccountId',
        'ownerId'                 => 'ownerId',
        'title'                   => 'title',
        'organizationId'          => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCodeRepoSn) {
            $res['appCodeRepoSn'] = $this->appCodeRepoSn;
        }
        if (null !== $this->autoDeleteBranchWhenEnd) {
            $res['autoDeleteBranchWhenEnd'] = $this->autoDeleteBranchWhenEnd;
        }
        if (null !== $this->branchName) {
            $res['branchName'] = $this->branchName;
        }
        if (null !== $this->createBranch) {
            $res['createBranch'] = $this->createBranch;
        }
        if (null !== $this->ownerAccountId) {
            $res['ownerAccountId'] = $this->ownerAccountId;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appCodeRepoSn'])) {
            $model->appCodeRepoSn = $map['appCodeRepoSn'];
        }
        if (isset($map['autoDeleteBranchWhenEnd'])) {
            $model->autoDeleteBranchWhenEnd = $map['autoDeleteBranchWhenEnd'];
        }
        if (isset($map['branchName'])) {
            $model->branchName = $map['branchName'];
        }
        if (isset($map['createBranch'])) {
            $model->createBranch = $map['createBranch'];
        }
        if (isset($map['ownerAccountId'])) {
            $model->ownerAccountId = $map['ownerAccountId'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
