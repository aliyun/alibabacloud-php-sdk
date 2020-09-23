<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDataServiceGroupsResponse\groupPagingResult;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $apiGatewayGroupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'tenantId'          => 'TenantId',
        'groupId'           => 'GroupId',
        'apiGatewayGroupId' => 'ApiGatewayGroupId',
        'groupName'         => 'GroupName',
        'description'       => 'Description',
        'createdTime'       => 'CreatedTime',
        'modifiedTime'      => 'ModifiedTime',
        'creatorId'         => 'CreatorId',
        'projectId'         => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('apiGatewayGroupId', $this->apiGatewayGroupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createdTime', $this->createdTime, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('creatorId', $this->creatorId, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiGatewayGroupId) {
            $res['ApiGatewayGroupId'] = $this->apiGatewayGroupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiGatewayGroupId'])) {
            $model->apiGatewayGroupId = $map['ApiGatewayGroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
