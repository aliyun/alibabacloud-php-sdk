<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetCoordinateTicketRequest extends Model
{
    /**
     * @description The ID of the stream collaboration. You can obtain the value of this parameter based on the value of `Coid` that is returned by the `ApplyCoordinationForMonitoring` operation.
     *
     * This parameter is required.
     * @example co-0sot77uale3****
     *
     * @var string
     */
    public $coId;

    /**
     * @description The name of the convenience user account. If you initiate the request as an administrator, you do not need to specify this parameter.
     *
     * @example Alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/436773.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the cloud computer connection task. The first time you initiate the request, you do not need to specify the ID of the cloud computer connection task. If no ticket is returned after you initiate the first request, you must specify the value of taskId that is returned for the first request in the subsequent request.
     *
     * @example 39cc15e5-6998-4b9f-9b2c-7a4cc3e2****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The type of the user.
     *
     * Set the value to TENANT_ADMIN.
     *
     *   The value of
     *
     * This parameter is required.
     * @example TENANT_ADMIN
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'coId'      => 'CoId',
        'endUserId' => 'EndUserId',
        'regionId'  => 'RegionId',
        'taskId'    => 'TaskId',
        'userType'  => 'UserType',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCoordinateTicketRequest
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
