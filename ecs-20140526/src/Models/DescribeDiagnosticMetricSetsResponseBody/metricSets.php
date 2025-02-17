<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticMetricSetsResponseBody;

use AlibabaCloud\Dara\Model;

class metricSets extends Model
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
    public $resourceType;
    /**
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
                $n1               = 0;
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

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
                $n1               = 0;
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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
