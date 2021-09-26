<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data;

use AlibabaCloud\Tea\Model;

class apiAuthorizedList extends Model
{
    /**
     * @var int
     */
    public $apiId;

    /**
     * @var int
     */
    public $apiStatus;

    /**
     * @var string
     */
    public $grantOperatorId;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $grantEndTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $grantCreatedTime;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $apiPath;
    protected $_name = [
        'apiId'            => 'ApiId',
        'apiStatus'        => 'ApiStatus',
        'grantOperatorId'  => 'GrantOperatorId',
        'projectId'        => 'ProjectId',
        'creatorId'        => 'CreatorId',
        'grantEndTime'     => 'GrantEndTime',
        'modifiedTime'     => 'ModifiedTime',
        'groupId'          => 'GroupId',
        'grantCreatedTime' => 'GrantCreatedTime',
        'createdTime'      => 'CreatedTime',
        'apiName'          => 'ApiName',
        'tenantId'         => 'TenantId',
        'apiPath'          => 'ApiPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->grantOperatorId) {
            $res['GrantOperatorId'] = $this->grantOperatorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->grantEndTime) {
            $res['GrantEndTime'] = $this->grantEndTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->grantCreatedTime) {
            $res['GrantCreatedTime'] = $this->grantCreatedTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->apiPath) {
            $res['ApiPath'] = $this->apiPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiAuthorizedList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['GrantOperatorId'])) {
            $model->grantOperatorId = $map['GrantOperatorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['GrantEndTime'])) {
            $model->grantEndTime = $map['GrantEndTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GrantCreatedTime'])) {
            $model->grantCreatedTime = $map['GrantCreatedTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ApiPath'])) {
            $model->apiPath = $map['ApiPath'];
        }

        return $model;
    }
}
