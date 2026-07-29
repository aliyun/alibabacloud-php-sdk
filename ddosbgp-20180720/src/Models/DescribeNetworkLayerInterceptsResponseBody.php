<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeNetworkLayerInterceptsResponseBody\interceptionRecords;

class DescribeNetworkLayerInterceptsResponseBody extends Model
{
    /**
     * @var int
     */
    public $interceptionRecordCount;

    /**
     * @var interceptionRecords[]
     */
    public $interceptionRecords;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCnt;
    protected $_name = [
        'interceptionRecordCount' => 'InterceptionRecordCount',
        'interceptionRecords' => 'InterceptionRecords',
        'requestId' => 'RequestId',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        if (\is_array($this->interceptionRecords)) {
            Model::validateArray($this->interceptionRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interceptionRecordCount) {
            $res['InterceptionRecordCount'] = $this->interceptionRecordCount;
        }

        if (null !== $this->interceptionRecords) {
            if (\is_array($this->interceptionRecords)) {
                $res['InterceptionRecords'] = [];
                $n1 = 0;
                foreach ($this->interceptionRecords as $item1) {
                    $res['InterceptionRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
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
        if (isset($map['InterceptionRecordCount'])) {
            $model->interceptionRecordCount = $map['InterceptionRecordCount'];
        }

        if (isset($map['InterceptionRecords'])) {
            if (!empty($map['InterceptionRecords'])) {
                $model->interceptionRecords = [];
                $n1 = 0;
                foreach ($map['InterceptionRecords'] as $item1) {
                    $model->interceptionRecords[$n1] = interceptionRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
