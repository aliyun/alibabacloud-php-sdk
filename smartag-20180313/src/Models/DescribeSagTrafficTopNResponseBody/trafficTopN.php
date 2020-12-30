<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSagTrafficTopNResponseBody;

use AlibabaCloud\Tea\Model;

class trafficTopN extends Model
{
    /**
     * @var string
     */
    public $trafficRate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'trafficRate' => 'TrafficRate',
        'instanceId'  => 'InstanceId',
        'name'        => 'Name',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trafficRate) {
            $res['TrafficRate'] = $this->trafficRate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficTopN
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TrafficRate'])) {
            $model->trafficRate = $map['TrafficRate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
