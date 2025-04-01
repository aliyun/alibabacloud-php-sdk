<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSlowSQLHistoryListResponseBody\slowSQLHistoryList;

class DescribeSlowSQLHistoryListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slowSQLHistoryList
     */
    public $slowSQLHistoryList;
    protected $_name = [
        'requestId' => 'RequestId',
        'slowSQLHistoryList' => 'SlowSQLHistoryList',
    ];

    public function validate()
    {
        if (null !== $this->slowSQLHistoryList) {
            $this->slowSQLHistoryList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slowSQLHistoryList) {
            $res['SlowSQLHistoryList'] = null !== $this->slowSQLHistoryList ? $this->slowSQLHistoryList->toArray($noStream) : $this->slowSQLHistoryList;
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

        if (isset($map['SlowSQLHistoryList'])) {
            $model->slowSQLHistoryList = slowSQLHistoryList::fromMap($map['SlowSQLHistoryList']);
        }

        return $model;
    }
}
