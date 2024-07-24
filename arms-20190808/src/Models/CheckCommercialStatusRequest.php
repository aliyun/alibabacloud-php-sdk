<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CheckCommercialStatusRequest extends Model
{
    /**
     * @description The region ID. Default value: cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ARMS sub-service. Valid values:
     *
     *   apm: Application Monitoring
     *   rum: RUM
     *   prometheus: Managed Service for Prometheus
     *   xtrace: Managed Service for OpenTelemetry
     *
     * This parameter is required.
     * @example apm
     *
     * @var string
     */
    public $service;
    protected $_name = [
        'regionId' => 'RegionId',
        'service'  => 'Service',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCommercialStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
