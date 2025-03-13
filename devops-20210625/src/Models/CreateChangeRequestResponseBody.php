<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateChangeRequestResponseBody extends Model
{
    /**
     * @example sn123
     *
     * @var string
     */
    public $appCodeRepoSn;

    /**
     * @example app-name
     *
     * @var string
     */
    public $appName;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoDeleteBranchWhenEnd;

    /**
     * @example hotfix/20240524
     *
     * @var string
     */
    public $branch;

    /**
     * @example create-account-123
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example create-id-123
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-01-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @example master
     *
     * @var string
     */
    public $originBranch;

    /**
     * @example revision-123
     *
     * @var string
     */
    public $originBranchRevisionSha;

    /**
     * @example account-id-123
     *
     * @var string
     */
    public $ownerAccountId;

    /**
     * @example owner-id-123
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example ce51b31b996246ecaf874736838360b2
     *
     * @var string
     */
    public $sn;

    /**
     * @example DEVELOPING
     *
     * @var string
     */
    public $state;

    /**
     * @example APP
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appCodeRepoSn'           => 'appCodeRepoSn',
        'appName'                 => 'appName',
        'autoDeleteBranchWhenEnd' => 'autoDeleteBranchWhenEnd',
        'branch'                  => 'branch',
        'creatorAccountId'        => 'creatorAccountId',
        'creatorId'               => 'creatorId',
        'gmtCreate'               => 'gmtCreate',
        'gmtModified'             => 'gmtModified',
        'name'                    => 'name',
        'originBranch'            => 'originBranch',
        'originBranchRevisionSha' => 'originBranchRevisionSha',
        'ownerAccountId'          => 'ownerAccountId',
        'ownerId'                 => 'ownerId',
        'sn'                      => 'sn',
        'state'                   => 'state',
        'type'                    => 'type',
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
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->autoDeleteBranchWhenEnd) {
            $res['autoDeleteBranchWhenEnd'] = $this->autoDeleteBranchWhenEnd;
        }
        if (null !== $this->branch) {
            $res['branch'] = $this->branch;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->originBranch) {
            $res['originBranch'] = $this->originBranch;
        }
        if (null !== $this->originBranchRevisionSha) {
            $res['originBranchRevisionSha'] = $this->originBranchRevisionSha;
        }
        if (null !== $this->ownerAccountId) {
            $res['ownerAccountId'] = $this->ownerAccountId;
        }
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChangeRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appCodeRepoSn'])) {
            $model->appCodeRepoSn = $map['appCodeRepoSn'];
        }
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['autoDeleteBranchWhenEnd'])) {
            $model->autoDeleteBranchWhenEnd = $map['autoDeleteBranchWhenEnd'];
        }
        if (isset($map['branch'])) {
            $model->branch = $map['branch'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['originBranch'])) {
            $model->originBranch = $map['originBranch'];
        }
        if (isset($map['originBranchRevisionSha'])) {
            $model->originBranchRevisionSha = $map['originBranchRevisionSha'];
        }
        if (isset($map['ownerAccountId'])) {
            $model->ownerAccountId = $map['ownerAccountId'];
        }
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
