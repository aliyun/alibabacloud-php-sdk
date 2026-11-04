<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;

class DescribeGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $groupResourceTypes;

    /**
     * @var string
     */
    public $groupType;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string[]
     */
    public $states;

    /**
     * @var bool
     */
    public $timeUsingPeriod;
    protected $_name = [
        'endTime' => 'EndTime',
        'groupResourceTypes' => 'GroupResourceTypes',
        'groupType' => 'GroupType',
        'instanceIds' => 'InstanceIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceIds' => 'ResourceIds',
        'startTime' => 'StartTime',
        'states' => 'States',
        'timeUsingPeriod' => 'TimeUsingPeriod',
    ];

    public function validate()
    {
        if (\is_array($this->groupResourceTypes)) {
            Model::validateArray($this->groupResourceTypes);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->states)) {
            Model::validateArray($this->states);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupResourceTypes) {
            if (\is_array($this->groupResourceTypes)) {
                $res['GroupResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->groupResourceTypes as $item1) {
                    $res['GroupResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->states) {
            if (\is_array($this->states)) {
                $res['States'] = [];
                $n1 = 0;
                foreach ($this->states as $item1) {
                    $res['States'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeUsingPeriod) {
            $res['TimeUsingPeriod'] = $this->timeUsingPeriod;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupResourceTypes'])) {
            if (!empty($map['GroupResourceTypes'])) {
                $model->groupResourceTypes = [];
                $n1 = 0;
                foreach ($map['GroupResourceTypes'] as $item1) {
                    $model->groupResourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['States'])) {
            if (!empty($map['States'])) {
                $model->states = [];
                $n1 = 0;
                foreach ($map['States'] as $item1) {
                    $model->states[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeUsingPeriod'])) {
            $model->timeUsingPeriod = $map['TimeUsingPeriod'];
        }

        return $model;
    }
}
