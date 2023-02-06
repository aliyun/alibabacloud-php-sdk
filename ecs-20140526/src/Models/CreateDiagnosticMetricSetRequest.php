<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticMetricSetRequest extends Model
{
    /**
     * @description The description of the diagnostic metric set.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of diagnostic metrics. You can specify up to 100 diagnostic metric IDs.
     *
     * @var string[]
     */
    public $metricIds;

    /**
     * @description The name of the diagnostic metric set.
     *
     * @example my_dms
     *
     * @var string
     */
    public $metricSetName;

    /**
     * @description The ID of the region in which to create the diagnostic metric set. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the resource.
     *
     * Default value: instance.
     * @example instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'description'   => 'Description',
        'metricIds'     => 'MetricIds',
        'metricSetName' => 'MetricSetName',
        'regionId'      => 'RegionId',
        'resourceType'  => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->metricIds) {
            $res['MetricIds'] = $this->metricIds;
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

    /**
     * @param array $map
     *
     * @return CreateDiagnosticMetricSetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MetricIds'])) {
            if (!empty($map['MetricIds'])) {
                $model->metricIds = $map['MetricIds'];
            }
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
