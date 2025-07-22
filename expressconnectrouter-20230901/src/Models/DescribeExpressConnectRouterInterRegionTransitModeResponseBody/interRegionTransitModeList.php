<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterInterRegionTransitModeResponseBody;

use AlibabaCloud\Tea\Model;

class interRegionTransitModeList extends Model
{
    /**
     * @description The cross-region forwarding mode of the ECR. Valid values:
     *
     *   **ECMP**: the load balancing mode.
     *   **NearBy**: the nearby forwarding mode.
     *
     * @example ECMP
     *
     * @var string
     */
    public $mode;

    /**
     * @description The region ID of the ECR.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'mode' => 'Mode',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return interRegionTransitModeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
