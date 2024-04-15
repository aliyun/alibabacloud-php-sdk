<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CancelCoordinationForMonitoringRequest extends Model
{
    /**
     * @description The IDs of stream collaboration tasks.
     *
     * @var string[]
     */
    public $coIds;

    /**
     * @description The ID of the end user that initiates stream collaboration. If the initiator is the administrator, skip this parameter.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~436773~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the user.
     *
     * Valid value:
     *
     * TENANT_ADMIN: administrator.
     *
     * @example TENANT_ADMIN
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'coIds'     => 'CoIds',
        'endUserId' => 'EndUserId',
        'regionId'  => 'RegionId',
        'userType'  => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coIds) {
            $res['CoIds'] = $this->coIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelCoordinationForMonitoringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoIds'])) {
            if (!empty($map['CoIds'])) {
                $model->coIds = $map['CoIds'];
            }
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

        return $model;
    }
}
