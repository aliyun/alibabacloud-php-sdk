<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponseBody\slowSQLList;

class DescribeSlowSQLListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slowSQLList[]
     */
    public $slowSQLList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'slowSQLList' => 'SlowSQLList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->slowSQLList)) {
            Model::validateArray($this->slowSQLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slowSQLList) {
            if (\is_array($this->slowSQLList)) {
                $res['SlowSQLList'] = [];
                $n1 = 0;
                foreach ($this->slowSQLList as $item1) {
                    $res['SlowSQLList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['SlowSQLList'])) {
            if (!empty($map['SlowSQLList'])) {
                $model->slowSQLList = [];
                $n1 = 0;
                foreach ($map['SlowSQLList'] as $item1) {
                    $model->slowSQLList[$n1] = slowSQLList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
