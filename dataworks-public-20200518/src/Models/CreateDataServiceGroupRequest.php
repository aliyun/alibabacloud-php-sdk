<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDataServiceGroupRequest extends Model
{
    /**
     * @description The ID of the API group that is associated with the business process in the API Gateway console. You can log on to the API Gateway console and go to the Group Details page to view the ID.
     *
     * This parameter is required.
     * @example 1000abcd
     *
     * @var string
     */
    public $apiGatewayGroupId;

    /**
     * @description The description of the business process.
     *
     * @example Test business process
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the business process.
     *
     * This parameter is required.
     * @example Business process name
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the workspace.
     *
     * This parameter is required.
     * @example 10001
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the tenant.
     *
     * @example 10002
     *
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'apiGatewayGroupId' => 'ApiGatewayGroupId',
        'description'       => 'Description',
        'groupName'         => 'GroupName',
        'projectId'         => 'ProjectId',
        'tenantId'          => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiGatewayGroupId) {
            $res['ApiGatewayGroupId'] = $this->apiGatewayGroupId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
     * @return CreateDataServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiGatewayGroupId'])) {
            $model->apiGatewayGroupId = $map['ApiGatewayGroupId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
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
