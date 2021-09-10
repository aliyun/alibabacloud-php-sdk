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
    public $apiStatus;

    /**
     * @var int
     */
    public $apiId;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $groupId;

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

    /**
     * @var authorizationRecords[]
     */
    public $authorizationRecords;
    protected $_name = [
        'apiStatus'            => 'ApiStatus',
        'apiId'                => 'ApiId',
        'modifiedTime'         => 'ModifiedTime',
        'groupId'              => 'GroupId',
        'projectId'            => 'ProjectId',
        'creatorId'            => 'CreatorId',
        'createdTime'          => 'CreatedTime',
        'apiName'              => 'ApiName',
        'tenantId'             => 'TenantId',
        'apiPath'              => 'ApiPath',
        'authorizationRecords' => 'AuthorizationRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiStatus) {
            $res['ApiStatus'] = $this->apiStatus;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
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
        if (null !== $this->authorizationRecords) {
            $res['AuthorizationRecords'] = [];
            if (null !== $this->authorizationRecords && \is_array($this->authorizationRecords)) {
                $n = 0;
                foreach ($this->authorizationRecords as $item) {
                    $res['AuthorizationRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ApiStatus'])) {
            $model->apiStatus = $map['ApiStatus'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
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
        if (isset($map['AuthorizationRecords'])) {
            if (!empty($map['AuthorizationRecords'])) {
                $model->authorizationRecords = [];
                $n                           = 0;
                foreach ($map['AuthorizationRecords'] as $item) {
                    $model->authorizationRecords[$n++] = null !== $item ? authorizationRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
