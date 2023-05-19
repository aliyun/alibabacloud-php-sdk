<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLListResponseBody\slowSQLList;
use AlibabaCloud\Tea\Model;

class DescribeSlowSQLListResponseBody extends Model
{
    /**
     * @description The SQL text.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sorting rule.
     *
     * @var slowSQLList[]
     */
    public $slowSQLList;

    /**
     * @description The name of the database.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'slowSQLList' => 'SlowSQLList',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->slowSQLList) {
            $res['SlowSQLList'] = [];
            if (null !== $this->slowSQLList && \is_array($this->slowSQLList)) {
                $n = 0;
                foreach ($this->slowSQLList as $item) {
                    $res['SlowSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowSQLListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlowSQLList'])) {
            if (!empty($map['SlowSQLList'])) {
                $model->slowSQLList = [];
                $n                  = 0;
                foreach ($map['SlowSQLList'] as $item) {
                    $model->slowSQLList[$n++] = null !== $item ? slowSQLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
