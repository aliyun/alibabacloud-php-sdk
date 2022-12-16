<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceAuthorizedApisResponseBody\data;

use AlibabaCloud\Tea\Model;

class apiAuthorizedList extends Model
{
    /**
     * @example 10002
     *
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @example /test/1
     *
     * @var string
     */
    public $apiPath;

    /**
     * @example 0
     *
     * @var int
     */
    public $apiStatus;

    /**
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 12345
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $grantCreatedTime;

    /**
     * @example 2020-06-24T00:21:01+0800
     *
     * @var string
     */
    public $grantEndTime;

    /**
     * @example 23456
     *
     * @var string
     */
    public $grantOperatorId;

    /**
     * @example abcde123456789
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 2020-06-23T00:21:01+0800
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
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
