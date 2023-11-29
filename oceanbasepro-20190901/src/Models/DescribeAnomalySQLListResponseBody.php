<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAnomalySQLListResponseBody\anomalySQLList;
use AlibabaCloud\Tea\Model;

class DescribeAnomalySQLListResponseBody extends Model
{
    /**
     * @description The list of suspicious SQL statements.
     *
     * @var anomalySQLList[]
     */
    public $anomalySQLList;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total count.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'anomalySQLList' => 'AnomalySQLList',
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anomalySQLList) {
            $res['AnomalySQLList'] = [];
            if (null !== $this->anomalySQLList && \is_array($this->anomalySQLList)) {
                $n = 0;
                foreach ($this->anomalySQLList as $item) {
                    $res['AnomalySQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnomalySQLListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnomalySQLList'])) {
            if (!empty($map['AnomalySQLList'])) {
                $model->anomalySQLList = [];
                $n                     = 0;
                foreach ($map['AnomalySQLList'] as $item) {
                    $model->anomalySQLList[$n++] = null !== $item ? anomalySQLList::fromMap($item) : $item;
                }
            }
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
