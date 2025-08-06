<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnosticMetricSetsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $metricSetIds;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'metricSetIds' => 'MetricSetIds',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'type' => 'Type',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

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

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

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

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
