<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\ListDoctorHBaseRegionServersResponseBody\data\metrics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The metric information.
     *
     * @var metrics
     */
    public $metrics;

    /**
     * @description The RegionServer host.
     *
     * @example emr-worker-4.cluster-20****
     *
     * @var string
     */
    public $regionServerHost;
    protected $_name = [
        'metrics'          => 'Metrics',
        'regionServerHost' => 'RegionServerHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metrics) {
            $res['Metrics'] = null !== $this->metrics ? $this->metrics->toMap() : null;
        }
        if (null !== $this->regionServerHost) {
            $res['RegionServerHost'] = $this->regionServerHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Metrics'])) {
            $model->metrics = metrics::fromMap($map['Metrics']);
        }
        if (isset($map['RegionServerHost'])) {
            $model->regionServerHost = $map['RegionServerHost'];
        }

        return $model;
    }
}
