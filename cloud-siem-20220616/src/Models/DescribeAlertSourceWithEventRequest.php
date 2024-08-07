<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeAlertSourceWithEventRequest extends Model
{
    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the region where your assets reside. Valid values:
     *
     *   Valid values: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the account that you switch from the management account.
     *
     * @example 113091674488****
     *
     * @var int
     */
    public $roleFor;

    /**
     * @description The type of the view. Valid values:
     * - 1: the global account
     * @example 1
     *
     * @var int
     */
    public $roleType;
    protected $_name = [
        'incidentUuid' => 'IncidentUuid',
        'regionId'     => 'RegionId',
        'roleFor'      => 'RoleFor',
        'roleType'     => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAlertSourceWithEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}
