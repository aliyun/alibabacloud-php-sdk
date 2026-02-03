<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisTrafficRankingResponseBody\flowRankingList;

class DescribeNisTrafficRankingResponseBody extends Model
{
    /**
     * @var flowRankingList[]
     */
    public $flowRankingList;

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
    public $nisTrafficRankingId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'flowRankingList' => 'FlowRankingList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nisTrafficRankingId' => 'NisTrafficRankingId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->flowRankingList)) {
            Model::validateArray($this->flowRankingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowRankingList) {
            if (\is_array($this->flowRankingList)) {
                $res['FlowRankingList'] = [];
                $n1 = 0;
                foreach ($this->flowRankingList as $item1) {
                    $res['FlowRankingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->nisTrafficRankingId) {
            $res['NisTrafficRankingId'] = $this->nisTrafficRankingId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['FlowRankingList'])) {
            if (!empty($map['FlowRankingList'])) {
                $model->flowRankingList = [];
                $n1 = 0;
                foreach ($map['FlowRankingList'] as $item1) {
                    $model->flowRankingList[$n1] = flowRankingList::fromMap($item1);
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

        if (isset($map['NisTrafficRankingId'])) {
            $model->nisTrafficRankingId = $map['NisTrafficRankingId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
