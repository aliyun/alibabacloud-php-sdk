<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteDiagnosticMetricSetsRequest extends Model
{
    /**
     * @description The IDs of diagnostic metric sets. You can specify up to 10 set IDs.
     *
     * @var string[]
     */
    public $metricSetIds;

    /**
     * @description The region ID of the diagnostic metric set. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metricSetIds' => 'MetricSetIds',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricSetIds) {
            $res['MetricSetIds'] = $this->metricSetIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDiagnosticMetricSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricSetIds'])) {
            if (!empty($map['MetricSetIds'])) {
                $model->metricSetIds = $map['MetricSetIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
