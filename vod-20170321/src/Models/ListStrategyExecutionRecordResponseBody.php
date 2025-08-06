<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListStrategyExecutionRecordResponseBody\executionRecordList;

class ListStrategyExecutionRecordResponseBody extends Model
{
    /**
     * @var executionRecordList[]
     */
    public $executionRecordList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'executionRecordList' => 'ExecutionRecordList',
        'maxResults' => 'MaxResults',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->executionRecordList)) {
            Model::validateArray($this->executionRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionRecordList) {
            if (\is_array($this->executionRecordList)) {
                $res['ExecutionRecordList'] = [];
                $n1 = 0;
                foreach ($this->executionRecordList as $item1) {
                    $res['ExecutionRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ExecutionRecordList'])) {
            if (!empty($map['ExecutionRecordList'])) {
                $model->executionRecordList = [];
                $n1 = 0;
                foreach ($map['ExecutionRecordList'] as $item1) {
                    $model->executionRecordList[$n1] = executionRecordList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
