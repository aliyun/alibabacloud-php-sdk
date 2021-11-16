<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceApiAuthoritiesResponseBody\data\apiAuthorizationList\authorizationRecords;
use AlibabaCloud\Tea\Model;

class apiAuthorizationList extends Model
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
     * @var authorizationRecords[]
     */
    public $authorizationRecords;

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
        'apiId'                => 'ApiId',
        'apiName'              => 'ApiName',
        'apiPath'              => 'ApiPath',
        'apiStatus'            => 'ApiStatus',
        'authorizationRecords' => 'AuthorizationRecords',
        'createdTime'          => 'CreatedTime',
        'creatorId'            => 'CreatorId',
        'groupId'              => 'GroupId',
        'modifiedTime'         => 'ModifiedTime',
        'projectId'            => 'ProjectId',
        'tenantId'             => 'TenantId',
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
        if (null !== $this->authorizationRecords) {
            $res['AuthorizationRecords'] = [];
            if (null !== $this->authorizationRecords && \is_array($this->authorizationRecords)) {
                $n = 0;
                foreach ($this->authorizationRecords as $item) {
                    $res['AuthorizationRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
     * @return apiAuthorizationList
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
        if (isset($map['AuthorizationRecords'])) {
            if (!empty($map['AuthorizationRecords'])) {
                $model->authorizationRecords = [];
                $n                           = 0;
                foreach ($map['AuthorizationRecords'] as $item) {
                    $model->authorizationRecords[$n++] = null !== $item ? authorizationRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
