<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstancesRequest extends Model
{
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
     * @var bool
     */
    public $noResourceId;

    /**
     * @var string[]
     */
    public $propertyKeyList;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $stateList;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'noResourceId' => 'NoResourceId',
        'propertyKeyList' => 'PropertyKeyList',
        'resourceIds' => 'ResourceIds',
        'resourceType' => 'ResourceType',
        'stateList' => 'StateList',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->propertyKeyList)) {
            Model::validateArray($this->propertyKeyList);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->stateList)) {
            Model::validateArray($this->stateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->noResourceId) {
            $res['NoResourceId'] = $this->noResourceId;
        }

        if (null !== $this->propertyKeyList) {
            if (\is_array($this->propertyKeyList)) {
                $res['PropertyKeyList'] = [];
                $n1 = 0;
                foreach ($this->propertyKeyList as $item1) {
                    $res['PropertyKeyList'][$n1] = $item1;
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

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->stateList) {
            if (\is_array($this->stateList)) {
                $res['StateList'] = [];
                $n1 = 0;
                foreach ($this->stateList as $item1) {
                    $res['StateList'][$n1] = $item1;
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

        if (isset($map['NoResourceId'])) {
            $model->noResourceId = $map['NoResourceId'];
        }

        if (isset($map['PropertyKeyList'])) {
            if (!empty($map['PropertyKeyList'])) {
                $model->propertyKeyList = [];
                $n1 = 0;
                foreach ($map['PropertyKeyList'] as $item1) {
                    $model->propertyKeyList[$n1] = $item1;
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

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['StateList'])) {
            if (!empty($map['StateList'])) {
                $model->stateList = [];
                $n1 = 0;
                foreach ($map['StateList'] as $item1) {
                    $model->stateList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
