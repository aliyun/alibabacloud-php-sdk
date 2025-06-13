<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

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
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->metricSetIds)) {
            Model::validateArray($this->metricSetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricSetIds) {
            if (\is_array($this->metricSetIds)) {
                $res['MetricSetIds'] = [];
                $n1 = 0;
                foreach ($this->metricSetIds as $item1) {
                    $res['MetricSetIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricSetIds'])) {
            if (!empty($map['MetricSetIds'])) {
                $model->metricSetIds = [];
                $n1 = 0;
                foreach ($map['MetricSetIds'] as $item1) {
                    $model->metricSetIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
