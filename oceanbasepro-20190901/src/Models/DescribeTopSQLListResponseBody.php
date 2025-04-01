<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTopSQLListResponseBody\topSQLList;

class DescribeTopSQLListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var topSQLList[]
     */
    public $topSQLList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'topSQLList' => 'TopSQLList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->topSQLList)) {
            Model::validateArray($this->topSQLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->topSQLList) {
            if (\is_array($this->topSQLList)) {
                $res['TopSQLList'] = [];
                $n1 = 0;
                foreach ($this->topSQLList as $item1) {
                    $res['TopSQLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TopSQLList'])) {
            if (!empty($map['TopSQLList'])) {
                $model->topSQLList = [];
                $n1 = 0;
                foreach ($map['TopSQLList'] as $item1) {
                    $model->topSQLList[$n1++] = topSQLList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
