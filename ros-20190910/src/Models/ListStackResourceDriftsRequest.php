<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class ListStackResourceDriftsRequest extends Model
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
    public $resourceDriftStatus;

    /**
     * @var string
     */
    public $stackId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceDriftStatus' => 'ResourceDriftStatus',
        'stackId' => 'StackId',
    ];

    public function validate()
    {
        if (\is_array($this->resourceDriftStatus)) {
            Model::validateArray($this->resourceDriftStatus);
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

        if (null !== $this->resourceDriftStatus) {
            if (\is_array($this->resourceDriftStatus)) {
                $res['ResourceDriftStatus'] = [];
                $n1 = 0;
                foreach ($this->resourceDriftStatus as $item1) {
                    $res['ResourceDriftStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
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

        if (isset($map['ResourceDriftStatus'])) {
            if (!empty($map['ResourceDriftStatus'])) {
                $model->resourceDriftStatus = [];
                $n1 = 0;
                foreach ($map['ResourceDriftStatus'] as $item1) {
                    $model->resourceDriftStatus[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
