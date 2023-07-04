<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponseBody\eipSegments;

use AlibabaCloud\Tea\Model;

class eipSegment extends Model
{
    /**
     * @description The time when the contiguous EIP group was created. The time is displayed in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is in UTC.
     *
     * @example 2020-03-06T12:30:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the contiguous EIP group.
     *
     * @example MyEipSegment
     *
     * @var string
     */
    public $descritpion;

    /**
     * @description The ID of the contiguous EIP group.
     *
     * @example eipsg-2zett8ba055tbsxme****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of EIPs in the contiguous EIP group.
     *
     * @example 16
     *
     * @var string
     */
    public $ipCount;

    /**
     * @description The name of the contiguous EIP group.
     *
     * @example MyEipSegment
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region to which the contiguous EIP group belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The CIDR block and mask of the contiguous EIP group.
     *
     * @example 161.xx.xx.32/28
     *
     * @var string
     */
    public $segment;

    /**
     * @description The status of the contiguous EIP group.
     *
     *   **Allocating**: being allocated
     *   **Allocated**: allocated
     *   **Releasing**: being released
     *
     * @example Allocated
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'descritpion'  => 'Descritpion',
        'instanceId'   => 'InstanceId',
        'ipCount'      => 'IpCount',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
        'segment'      => 'Segment',
        'status'       => 'Status',
        'zone'         => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->descritpion) {
            $res['Descritpion'] = $this->descritpion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->segment) {
            $res['Segment'] = $this->segment;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipSegment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Descritpion'])) {
            $model->descritpion = $map['Descritpion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Segment'])) {
            $model->segment = $map['Segment'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
