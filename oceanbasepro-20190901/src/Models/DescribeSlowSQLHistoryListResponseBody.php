<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponseBody\slowSQLHistoryList;
use AlibabaCloud\Tea\Model;

class DescribeSlowSQLHistoryListResponseBody extends Model
{
    /**
     * @description The end time of the time range for querying the execution history of the slow SQL statement.
     * The value must be UTC time in the format of YYYY-MM-DDThh:mm:ssZ.
     * @example EE205C00-30E4-XXXX-XXXX-87E3A8A2AA0C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Hard parsing time。
     *
     * @var slowSQLHistoryList
     */
    public $slowSQLHistoryList;
    protected $_name = [
        'requestId'          => 'RequestId',
        'slowSQLHistoryList' => 'SlowSQLHistoryList',
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
        if (null !== $this->slowSQLHistoryList) {
            $res['SlowSQLHistoryList'] = null !== $this->slowSQLHistoryList ? $this->slowSQLHistoryList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlowSQLHistoryListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlowSQLHistoryList'])) {
            $model->slowSQLHistoryList = slowSQLHistoryList::fromMap($map['SlowSQLHistoryList']);
        }

        return $model;
    }
}
