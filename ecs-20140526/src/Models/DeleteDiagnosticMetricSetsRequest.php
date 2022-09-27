<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DeleteDiagnosticMetricSetsRequest extends Model
{
    /**
     * @var string[]
     */
    public $metricSetIds;

    /**
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
