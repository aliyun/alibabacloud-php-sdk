<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataServiceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $apiGatewayGroupId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var int
     */
    public $projectId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
