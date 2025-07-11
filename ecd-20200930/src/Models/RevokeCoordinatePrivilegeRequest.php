<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RevokeCoordinatePrivilegeRequest extends Model
{
    /**
     * @description The ID of the stream coordination task.
     *
     * This parameter is required.
     *
     * @example co-fqsm6e8ee75w61fp9
     *
     * @var string
     */
    public $coId;

    /**
     * @description The ID of the end user.
     *
     * @example zhangsan
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of user who requires the coordinate permissions.
     *
     * Set the value to TENANT_ADMIN. Only tenant administrators can be granted with the coordinate permissions.
     *
     * This parameter is required.
     *
     * @example TENANT_ADMIN
     *
     * @var string
     */
    public $userType;

    /**
     * @description The unique identifier of the client. If you use an Alibaba Cloud Workspace client, click **About** on the client logon page to view the identifier of the client.
     *
     * @example C78CA9E99315687575DD2844C1F3****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coId' => 'CoId',
        'endUserId' => 'EndUserId',
        'regionId' => 'RegionId',
        'userType' => 'UserType',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->coId) {
            $res['CoId'] = $this->coId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RevokeCoordinatePrivilegeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoId'])) {
            $model->coId = $map['CoId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
