<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeOnDemandInstanceResponse;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $defenseStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $ipnet;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'remark'        => 'Remark',
        'defenseStatus' => 'DefenseStatus',
        'regionId'      => 'RegionId',
        'ipnet'         => 'Ipnet',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('defenseStatus', $this->defenseStatus, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipnet', $this->ipnet, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->defenseStatus) {
            $res['DefenseStatus'] = $this->defenseStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipnet) {
            $res['Ipnet'] = $this->ipnet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['DefenseStatus'])) {
            $model->defenseStatus = $map['DefenseStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Ipnet'])) {
            if (!empty($map['Ipnet'])) {
                $model->ipnet = $map['Ipnet'];
            }
        }

        return $model;
    }
}
