<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody;

use AlibabaCloud\SDK\Emr\V20210320\Models\GetDoctorHBaseRegionResponseBody\data\metrics;
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
     * @example emr-worker-2.cluster-20****
     *
     * @var string
     */
    public $regionServerHost;

    /**
     * @example tb_item
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'metrics'          => 'Metrics',
        'regionServerHost' => 'RegionServerHost',
        'tableName'        => 'TableName',
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
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
