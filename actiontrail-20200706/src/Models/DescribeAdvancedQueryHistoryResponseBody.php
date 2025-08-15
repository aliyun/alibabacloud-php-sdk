<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\DescribeAdvancedQueryHistoryResponseBody\queryHistoryList;

class DescribeAdvancedQueryHistoryResponseBody extends Model
{
    /**
     * @var queryHistoryList[]
     */
    public $queryHistoryList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryHistoryList' => 'QueryHistoryList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->queryHistoryList)) {
            Model::validateArray($this->queryHistoryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryHistoryList) {
            if (\is_array($this->queryHistoryList)) {
                $res['QueryHistoryList'] = [];
                $n1 = 0;
                foreach ($this->queryHistoryList as $item1) {
                    $res['QueryHistoryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['QueryHistoryList'])) {
            if (!empty($map['QueryHistoryList'])) {
                $model->queryHistoryList = [];
                $n1 = 0;
                foreach ($map['QueryHistoryList'] as $item1) {
                    $model->queryHistoryList[$n1] = queryHistoryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
