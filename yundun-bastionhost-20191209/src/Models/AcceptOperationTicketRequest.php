<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class AcceptOperationTicketRequest extends Model
{
    /**
     * @description The maximum number of logons allowed. Valid values:
     *
     *   0: The number of logons is unlimited. The O\&M engineer can log on to the specified asset for an unlimited number of times during the validity period.
     *   1: The O\&M engineer can log on to the specified asset only once during the validity period.
     *
     * >  You can set this parameter only to 0 if you review an O\&M application on a database.
     * @example 1
     *
     * @var string
     */
    public $effectCount;

    /**
     * @description The end time of the validity period. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679393152
     *
     * @var string
     */
    public $effectEndTime;

    /**
     * @description The start time of the validity period. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1685600242
     *
     * @var string
     */
    public $effectStartTime;

    /**
     * @description The ID of the bastion host.
     *
     * > You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the O\&M application that you want to approve. You can call the ListOperationTickets operation to query the IDs of all O\&M applications that require review.
     *
     * @example 1
     *
     * @var string
     */
    public $operationTicketId;

    /**
     * @description The region ID of the bastion host.
     *
     * >  For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'effectCount'       => 'EffectCount',
        'effectEndTime'     => 'EffectEndTime',
        'effectStartTime'   => 'EffectStartTime',
        'instanceId'        => 'InstanceId',
        'operationTicketId' => 'OperationTicketId',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectCount) {
            $res['EffectCount'] = $this->effectCount;
        }
        if (null !== $this->effectEndTime) {
            $res['EffectEndTime'] = $this->effectEndTime;
        }
        if (null !== $this->effectStartTime) {
            $res['EffectStartTime'] = $this->effectStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operationTicketId) {
            $res['OperationTicketId'] = $this->operationTicketId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AcceptOperationTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EffectCount'])) {
            $model->effectCount = $map['EffectCount'];
        }
        if (isset($map['EffectEndTime'])) {
            $model->effectEndTime = $map['EffectEndTime'];
        }
        if (isset($map['EffectStartTime'])) {
            $model->effectStartTime = $map['EffectStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperationTicketId'])) {
            $model->operationTicketId = $map['OperationTicketId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
