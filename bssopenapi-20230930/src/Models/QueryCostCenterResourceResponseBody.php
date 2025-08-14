<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResourceResponseBody\costCenterResourceDtoList;

class QueryCostCenterResourceResponseBody extends Model
{
    /**
     * @var costCenterResourceDtoList[]
     */
    public $costCenterResourceDtoList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'costCenterResourceDtoList' => 'CostCenterResourceDtoList',
        'maxResults' => 'MaxResults',
        'metadata' => 'Metadata',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->costCenterResourceDtoList)) {
            Model::validateArray($this->costCenterResourceDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterResourceDtoList) {
            if (\is_array($this->costCenterResourceDtoList)) {
                $res['CostCenterResourceDtoList'] = [];
                $n1 = 0;
                foreach ($this->costCenterResourceDtoList as $item1) {
                    $res['CostCenterResourceDtoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CostCenterResourceDtoList'])) {
            if (!empty($map['CostCenterResourceDtoList'])) {
                $model->costCenterResourceDtoList = [];
                $n1 = 0;
                foreach ($map['CostCenterResourceDtoList'] as $item1) {
                    $model->costCenterResourceDtoList[$n1] = costCenterResourceDtoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
