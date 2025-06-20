<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;

class ListMultiAccountResourceGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

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
    public $resourceGroupIds;
    protected $_name = [
        'accountId' => 'AccountId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroupIds)) {
            Model::validateArray($this->resourceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupIds) {
            if (\is_array($this->resourceGroupIds)) {
                $res['ResourceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->resourceGroupIds as $item1) {
                    $res['ResourceGroupIds'][$n1] = $item1;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = [];
                $n1 = 0;
                foreach ($map['ResourceGroupIds'] as $item1) {
                    $model->resourceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
