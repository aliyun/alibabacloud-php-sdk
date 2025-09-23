<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Dara\Model;

class ListSharedResourcesRequest extends Model
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
     * @var string[]
     */
    public $resourceArns;

    /**
     * @var string[]
     */
    public $resourceIds;

    /**
     * @var string
     */
    public $resourceOwner;

    /**
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceArns' => 'ResourceArns',
        'resourceIds' => 'ResourceIds',
        'resourceOwner' => 'ResourceOwner',
        'resourceShareIds' => 'ResourceShareIds',
        'resourceType' => 'ResourceType',
        'target' => 'Target',
    ];

    public function validate()
    {
        if (\is_array($this->resourceArns)) {
            Model::validateArray($this->resourceArns);
        }
        if (\is_array($this->resourceIds)) {
            Model::validateArray($this->resourceIds);
        }
        if (\is_array($this->resourceShareIds)) {
            Model::validateArray($this->resourceShareIds);
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

        if (null !== $this->resourceArns) {
            if (\is_array($this->resourceArns)) {
                $res['ResourceArns'] = [];
                $n1 = 0;
                foreach ($this->resourceArns as $item1) {
                    $res['ResourceArns'][$n1] = $item1;
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

        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }

        if (null !== $this->resourceShareIds) {
            if (\is_array($this->resourceShareIds)) {
                $res['ResourceShareIds'] = [];
                $n1 = 0;
                foreach ($this->resourceShareIds as $item1) {
                    $res['ResourceShareIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->target) {
            $res['Target'] = $this->target;
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

        if (isset($map['ResourceArns'])) {
            if (!empty($map['ResourceArns'])) {
                $model->resourceArns = [];
                $n1 = 0;
                foreach ($map['ResourceArns'] as $item1) {
                    $model->resourceArns[$n1] = $item1;
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

        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }

        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = [];
                $n1 = 0;
                foreach ($map['ResourceShareIds'] as $item1) {
                    $model->resourceShareIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
