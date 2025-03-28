<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data;

use AlibabaCloud\Dara\Model;

class apiAuthorizedList extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiPath;

    /**
     * @var int
     */
    public $apiStatus;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $grantCreatedTime;

    /**
     * @var string
     */
    public $grantEndTime;

    /**
     * @var string
     */
    public $grantOperatorId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'apiPath' => 'ApiPath',
        'apiStatus' => 'ApiStatus',
        'createdTime' => 'CreatedTime',
        'creatorId' => 'CreatorId',
        'grantCreatedTime' => 'GrantCreatedTime',
        'grantEndTime' => 'GrantEndTime',
        'grantOperatorId' => 'GrantOperatorId',
        'groupId' => 'GroupId',
        'modifiedTime' => 'ModifiedTime',
        'projectId' => 'ProjectId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }

        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }

        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->grantCreatedTime) {
            $res['GrantCreatedTime'] = $this->grantCreatedTime;
        }

        if (null !== $this->grantEndTime) {
            $res['GrantEndTime'] = $this->grantEndTime;
        }

        if (null !== $this->grantOperatorId) {
            $res['GrantOperatorId'] = $this->grantOperatorId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }

        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['GrantCreatedTime'])) {
            $model->grantCreatedTime = $map['GrantCreatedTime'];
        }

        if (isset($map['GrantEndTime'])) {
            $model->grantEndTime = $map['GrantEndTime'];
        }

        if (isset($map['GrantOperatorId'])) {
            $model->grantOperatorId = $map['GrantOperatorId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
