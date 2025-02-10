<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponseBody\eipSegments;

use AlibabaCloud\Dara\Model;

class eipSegment extends Model
{
    /**
     * @var string
     */
    public $creationTime;
    /**
     * @var string
     */
    public $descritpion;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $ipCount;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $segment;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
