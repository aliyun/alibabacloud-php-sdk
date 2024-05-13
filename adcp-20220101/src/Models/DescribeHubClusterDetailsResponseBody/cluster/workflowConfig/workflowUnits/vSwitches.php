<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster\workflowConfig\workflowUnits;

use AlibabaCloud\Tea\Model;

class vSwitches extends Model
{
    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-wz9sf0hsuizl7bxnj****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The zone ID of the cluster.
     *
     * > You can call the [DescribeRegions](https://help.aliyun.com/document_detail/143074.html) operation to query the most recent zone list.
     * @example cn-hangzhou-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vswitchId' => 'VswitchId',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitches
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
