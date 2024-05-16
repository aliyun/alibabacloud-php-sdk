<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddProjectMemberToRoleRequest extends Model
{
    /**
     * @description The ID of the request. You can use the ID to search for logs and troubleshoot issues based on the logs.
     *
     * @example 1AFAE64E-D1BE-432B-A9*****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of your Alibaba Cloud account. To view the ID, log on to [the DataWorks console](https://workbench.data.aliyun.com/console) and move the pointer over the profile picture in the upper-right corner.
     *
     * This parameter is required.
     * @example 27
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The client token. It is a field with the idempotence property. We recommend that you use a universally unique identifier (UUID). This parameter is used to uniquely identify the API operation call.
     *
     * This parameter is required.
     * @example role_project_guest
     *
     * @var string
     */
    public $roleCode;

    /**
     * @description The region of the workspace. For example, the ID of the China (Shanghai) region is cn-shanghai, and that of the China (Zhangjiakou) region is cn-zhangjiakou. The system automatically determines the value of this parameter based on the endpoint used to call the operation.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'projectId'   => 'ProjectId',
        'roleCode'    => 'RoleCode',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->roleCode) {
            $res['RoleCode'] = $this->roleCode;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProjectMemberToRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RoleCode'])) {
            $model->roleCode = $map['RoleCode'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
