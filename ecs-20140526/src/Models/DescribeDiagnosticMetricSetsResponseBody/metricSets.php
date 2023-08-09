<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticMetricSetsResponseBody;

use AlibabaCloud\Tea\Model;

class metricSets extends Model
{
    /**
     * @description The description of the diagnostic metric set.
     *
     * @example connection issue diagnostics
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of the diagnostic metrics.
     *
     * @var string[]
     */
    public $metricIds;

    /**
     * @description The ID of the diagnostic metric set.
     *
     * @example dms-bp17p0qwtr72zmu*****
     *
     * @var string
     */
    public $metricSetId;

    /**
     * @description The name of the diagnostic metric set.
     *
     * @example connection issue diagnostics
     *
     * @var string
     */
    public $metricSetName;

    /**
     * @description The resource type supported by the diagnostic metric set.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The type of the diagnostic metric set. Valid values:
     *
     *   User: user-defined diagnostic metric set
     *   Common: common diagnostic metric set
     *
     * @example User
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description'   => 'Description',
        'metricIds'     => 'MetricIds',
        'metricSetId'   => 'MetricSetId',
        'metricSetName' => 'MetricSetName',
        'resourceType'  => 'ResourceType',
        'type'          => 'Type',
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
        if (null !== $this->metricSetId) {
            $res['MetricSetId'] = $this->metricSetId;
        }
        if (null !== $this->metricSetName) {
            $res['MetricSetName'] = $this->metricSetName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricSets
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
        if (isset($map['MetricSetId'])) {
            $model->metricSetId = $map['MetricSetId'];
        }
        if (isset($map['MetricSetName'])) {
            $model->metricSetName = $map['MetricSetName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
