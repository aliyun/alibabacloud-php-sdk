<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;

class DescribeRunIdDeductionsRequest extends Model
{
    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string[]
     */
    public $agentTypes;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $deductionTypes;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $groupByFields;

    /**
     * @var string[]
     */
    public $groupResourceTypes;

    /**
     * @var bool
     */
    public $groupSeparator;

    /**
     * @var string
     */
    public $instanceIdType;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $packageIds;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $resourceTypes;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'agentType' => 'AgentType',
        'agentTypes' => 'AgentTypes',
        'aliUid' => 'AliUid',
        'bizType' => 'BizType',
        'deductionTypes' => 'DeductionTypes',
        'endTime' => 'EndTime',
        'groupByFields' => 'GroupByFields',
        'groupResourceTypes' => 'GroupResourceTypes',
        'groupSeparator' => 'GroupSeparator',
        'instanceIdType' => 'InstanceIdType',
        'instanceIds' => 'InstanceIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'packageIds' => 'PackageIds',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'resourceType' => 'ResourceType',
        'resourceTypes' => 'ResourceTypes',
        'startTime' => 'StartTime',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (\is_array($this->agentTypes)) {
            Model::validateArray($this->agentTypes);
        }
        if (\is_array($this->deductionTypes)) {
            Model::validateArray($this->deductionTypes);
        }
        if (\is_array($this->groupByFields)) {
            Model::validateArray($this->groupByFields);
        }
        if (\is_array($this->groupResourceTypes)) {
            Model::validateArray($this->groupResourceTypes);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->packageIds)) {
            Model::validateArray($this->packageIds);
        }
        if (\is_array($this->resourceTypes)) {
            Model::validateArray($this->resourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->agentTypes) {
            if (\is_array($this->agentTypes)) {
                $res['AgentTypes'] = [];
                $n1 = 0;
                foreach ($this->agentTypes as $item1) {
                    $res['AgentTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->deductionTypes) {
            if (\is_array($this->deductionTypes)) {
                $res['DeductionTypes'] = [];
                $n1 = 0;
                foreach ($this->deductionTypes as $item1) {
                    $res['DeductionTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupByFields) {
            if (\is_array($this->groupByFields)) {
                $res['GroupByFields'] = [];
                $n1 = 0;
                foreach ($this->groupByFields as $item1) {
                    $res['GroupByFields'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->groupSeparator) {
            $res['GroupSeparator'] = $this->groupSeparator;
        }

        if (null !== $this->instanceIdType) {
            $res['InstanceIdType'] = $this->instanceIdType;
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

        if (null !== $this->packageIds) {
            if (\is_array($this->packageIds)) {
                $res['PackageIds'] = [];
                $n1 = 0;
                foreach ($this->packageIds as $item1) {
                    $res['PackageIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceTypes) {
            if (\is_array($this->resourceTypes)) {
                $res['ResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->resourceTypes as $item1) {
                    $res['ResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['AgentTypes'])) {
            if (!empty($map['AgentTypes'])) {
                $model->agentTypes = [];
                $n1 = 0;
                foreach ($map['AgentTypes'] as $item1) {
                    $model->agentTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['DeductionTypes'])) {
            if (!empty($map['DeductionTypes'])) {
                $model->deductionTypes = [];
                $n1 = 0;
                foreach ($map['DeductionTypes'] as $item1) {
                    $model->deductionTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupByFields'])) {
            if (!empty($map['GroupByFields'])) {
                $model->groupByFields = [];
                $n1 = 0;
                foreach ($map['GroupByFields'] as $item1) {
                    $model->groupByFields[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['GroupSeparator'])) {
            $model->groupSeparator = $map['GroupSeparator'];
        }

        if (isset($map['InstanceIdType'])) {
            $model->instanceIdType = $map['InstanceIdType'];
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

        if (isset($map['PackageIds'])) {
            if (!empty($map['PackageIds'])) {
                $model->packageIds = [];
                $n1 = 0;
                foreach ($map['PackageIds'] as $item1) {
                    $model->packageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n1 = 0;
                foreach ($map['ResourceTypes'] as $item1) {
                    $model->resourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
