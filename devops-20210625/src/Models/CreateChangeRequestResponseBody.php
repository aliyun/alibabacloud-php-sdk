<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateChangeRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $appCodeRepoSn;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var bool
     */
    public $autoDeleteBranchWhenEnd;
    /**
     * @var string
     */
    public $branch;
    /**
     * @var string
     */
    public $creatorAccountId;
    /**
     * @var string
     */
    public $creatorId;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $originBranch;
    /**
     * @var string
     */
    public $originBranchRevisionSha;
    /**
     * @var string
     */
    public $ownerAccountId;
    /**
     * @var string
     */
    public $ownerId;
    /**
     * @var string
     */
    public $sn;
    /**
     * @var string
     */
    public $state;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
