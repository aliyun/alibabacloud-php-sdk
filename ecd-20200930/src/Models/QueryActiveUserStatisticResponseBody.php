<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\QueryActiveUserStatisticResponseBody\userStatisticList;

class QueryActiveUserStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var userStatisticList[]
     */
    public $userStatisticList;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'userStatisticList' => 'UserStatisticList',
    ];

    public function validate()
    {
        if (\is_array($this->userStatisticList)) {
            Model::validateArray($this->userStatisticList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userStatisticList) {
            if (\is_array($this->userStatisticList)) {
                $res['UserStatisticList'] = [];
                $n1 = 0;
                foreach ($this->userStatisticList as $item1) {
                    $res['UserStatisticList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserStatisticList'])) {
            if (!empty($map['UserStatisticList'])) {
                $model->userStatisticList = [];
                $n1 = 0;
                foreach ($map['UserStatisticList'] as $item1) {
                    $model->userStatisticList[$n1] = userStatisticList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
