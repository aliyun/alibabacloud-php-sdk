<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data;

use AlibabaCloud\Tea\Model;

class apiAuthorizedList extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 10002
     *
     * @var int
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example My API Name
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The path of the API.
     *
     * @example /test/1
     *
     * @var string
     */
    public $apiPath;

    /**
     * @description The status of the API. Valid values: 0 and 1. The value 0 indicates that the API is not published. The value 1 indicates that the API is published.
     *
     * @example 0
     *
     * @var int
     */
    public $apiStatus;

    /**
     * @description The time when the API was created.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the API owner.
     *
     * @example 12345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The time when the access permissions of the API were granted.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $grantCreatedTime;

    /**
     * @description The expiration time for the granted access permissions of the API.
     *
     * @example 2020-06-24T00:21:01+0800
     *
     * @var string
     */
    public $grantEndTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who granted the access permissions of the API.
     *
     * @example 23456
     *
     * @var string
     */
    public $grantOperatorId;

    /**
     * @description The ID of the API group.
     *
     * @example abcde123456789
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The time when the API was last updated.
     *
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the workspace.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10001
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiId'            => 'ApiId',
        'apiName'          => 'ApiName',
        'apiPath'          => 'ApiPath',
        'apiStatus'        => 'ApiStatus',
        'createdTime'      => 'CreatedTime',
        'creatorId'        => 'CreatorId',
        'grantCreatedTime' => 'GrantCreatedTime',
        'grantEndTime'     => 'GrantEndTime',
        'grantOperatorId'  => 'GrantOperatorId',
        'groupId'          => 'GroupId',
        'modifiedTime'     => 'ModifiedTime',
        'projectId'        => 'ProjectId',
        'tenantId'         => 'TenantId',
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
