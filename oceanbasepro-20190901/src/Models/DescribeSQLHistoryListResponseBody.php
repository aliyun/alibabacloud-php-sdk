<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponseBody\SQLHistoryList;
use AlibabaCloud\Tea\Model;

class DescribeSQLHistoryListResponseBody extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of Bloom filter cache hits.
     *
     * @var SQLHistoryList
     */
    public $SQLHistoryList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'SQLHistoryList' => 'SQLHistoryList',
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
        if (null !== $this->SQLHistoryList) {
            $res['SQLHistoryList'] = null !== $this->SQLHistoryList ? $this->SQLHistoryList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLHistoryListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SQLHistoryList'])) {
            $model->SQLHistoryList = SQLHistoryList::fromMap($map['SQLHistoryList']);
        }

        return $model;
    }
}
