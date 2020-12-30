<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcListResponseBody;

use AlibabaCloud\Tea\Model;

class vpcList extends Model
{
    /**
     * @var string
     */
    public $instanceDesc;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceDesc' => 'InstanceDesc',
        'instanceName' => 'InstanceName',
        'ecsCount'     => 'EcsCount',
        'instanceId'   => 'InstanceId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceDesc) {
            $res['InstanceDesc'] = $this->instanceDesc;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDesc'])) {
            $model->instanceDesc = $map['InstanceDesc'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
