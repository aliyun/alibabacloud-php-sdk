<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListMyApplicationsRequest\resource;

class ListMyApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $defSchema;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string[]
     */
    public $resourceType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'defSchema' => 'DefSchema',
        'endTime' => 'EndTime',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'resource' => 'Resource',
        'resourceType' => 'ResourceType',
        'startTime' => 'StartTime',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (\is_array($this->resourceType)) {
            Model::validateArray($this->resourceType);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defSchema) {
            $res['DefSchema'] = $this->defSchema;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->resourceType) {
            if (\is_array($this->resourceType)) {
                $res['ResourceType'] = [];
                $n1 = 0;
                foreach ($this->resourceType as $item1) {
                    $res['ResourceType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DefSchema'])) {
            $model->defSchema = $map['DefSchema'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        if (isset($map['ResourceType'])) {
            if (!empty($map['ResourceType'])) {
                $model->resourceType = [];
                $n1 = 0;
                foreach ($map['ResourceType'] as $item1) {
                    $model->resourceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
