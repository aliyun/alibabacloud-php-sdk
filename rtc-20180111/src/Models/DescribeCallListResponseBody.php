<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeCallListResponseBody\callList;

class DescribeCallListResponseBody extends Model
{
    /**
     * @var callList[]
     */
    public $callList;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'callList' => 'CallList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        if (\is_array($this->callList)) {
            Model::validateArray($this->callList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callList) {
            if (\is_array($this->callList)) {
                $res['CallList'] = [];
                $n1 = 0;
                foreach ($this->callList as $item1) {
                    $res['CallList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CallList'])) {
            if (!empty($map['CallList'])) {
                $model->callList = [];
                $n1 = 0;
                foreach ($map['CallList'] as $item1) {
                    $model->callList[$n1] = callList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
