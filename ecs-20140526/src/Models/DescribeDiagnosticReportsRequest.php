<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnosticReportsRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $reportIds;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'reportIds' => 'ReportIds',
        'resourceIds' => 'ResourceIds',
        'severity' => 'Severity',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->reportIds)) {
            Model::validateArray($this->reportIds);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportIds) {
            if (\is_array($this->reportIds)) {
                $res['ReportIds'] = [];
                $n1 = 0;
                foreach ($this->reportIds as $item1) {
                    $res['ReportIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceIds) {
            if (\is_array($this->resourceIds)) {
                $res['ResourceIds'] = [];
                $n1 = 0;
                foreach ($this->resourceIds as $item1) {
                    $res['ResourceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportIds'])) {
            if (!empty($map['ReportIds'])) {
                $model->reportIds = [];
                $n1 = 0;
                foreach ($map['ReportIds'] as $item1) {
                    $model->reportIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = [];
                $n1 = 0;
                foreach ($map['ResourceIds'] as $item1) {
                    $model->resourceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
