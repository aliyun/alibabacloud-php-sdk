<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ModifyDiagnosticMetricSetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $metricIds;

    /**
     * @var string
     */
    public $metricSetId;

    /**
     * @var string
     */
    public $metricSetName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'description' => 'Description',
        'metricIds' => 'MetricIds',
        'metricSetId' => 'MetricSetId',
        'metricSetName' => 'MetricSetName',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->metricIds)) {
            Model::validateArray($this->metricIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->metricIds) {
            if (\is_array($this->metricIds)) {
                $res['MetricIds'] = [];
                $n1 = 0;
                foreach ($this->metricIds as $item1) {
                    $res['MetricIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->metricSetId) {
            $res['MetricSetId'] = $this->metricSetId;
        }

        if (null !== $this->metricSetName) {
            $res['MetricSetName'] = $this->metricSetName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MetricIds'])) {
            if (!empty($map['MetricIds'])) {
                $model->metricIds = [];
                $n1 = 0;
                foreach ($map['MetricIds'] as $item1) {
                    $model->metricIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MetricSetId'])) {
            $model->metricSetId = $map['MetricSetId'];
        }

        if (isset($map['MetricSetName'])) {
            $model->metricSetName = $map['MetricSetName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
