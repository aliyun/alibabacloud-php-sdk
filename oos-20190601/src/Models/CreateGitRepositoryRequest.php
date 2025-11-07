<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreateGitRepositoryRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $isPrivate;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceRepoBranch;

    /**
     * @var string
     */
    public $sourceRepoName;

    /**
     * @var string
     */
    public $sourceRepoOwner;

    /**
     * @var string
     */
    public $targetRepoName;

    /**
     * @var string
     */
    public $targetRepoOwner;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'isPrivate' => 'IsPrivate',
        'orgId' => 'OrgId',
        'owner' => 'Owner',
        'platform' => 'Platform',
        'regionId' => 'RegionId',
        'sourceRepoBranch' => 'SourceRepoBranch',
        'sourceRepoName' => 'SourceRepoName',
        'sourceRepoOwner' => 'SourceRepoOwner',
        'targetRepoName' => 'TargetRepoName',
        'targetRepoOwner' => 'TargetRepoOwner',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->isPrivate) {
            $res['IsPrivate'] = $this->isPrivate;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceRepoBranch) {
            $res['SourceRepoBranch'] = $this->sourceRepoBranch;
        }

        if (null !== $this->sourceRepoName) {
            $res['SourceRepoName'] = $this->sourceRepoName;
        }

        if (null !== $this->sourceRepoOwner) {
            $res['SourceRepoOwner'] = $this->sourceRepoOwner;
        }

        if (null !== $this->targetRepoName) {
            $res['TargetRepoName'] = $this->targetRepoName;
        }

        if (null !== $this->targetRepoOwner) {
            $res['TargetRepoOwner'] = $this->targetRepoOwner;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['IsPrivate'])) {
            $model->isPrivate = $map['IsPrivate'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceRepoBranch'])) {
            $model->sourceRepoBranch = $map['SourceRepoBranch'];
        }

        if (isset($map['SourceRepoName'])) {
            $model->sourceRepoName = $map['SourceRepoName'];
        }

        if (isset($map['SourceRepoOwner'])) {
            $model->sourceRepoOwner = $map['SourceRepoOwner'];
        }

        if (isset($map['TargetRepoName'])) {
            $model->targetRepoName = $map['TargetRepoName'];
        }

        if (isset($map['TargetRepoOwner'])) {
            $model->targetRepoOwner = $map['TargetRepoOwner'];
        }

        return $model;
    }
}
