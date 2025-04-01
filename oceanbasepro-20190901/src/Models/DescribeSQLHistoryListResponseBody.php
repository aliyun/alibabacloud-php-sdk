<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponseBody\SQLHistoryList;

class DescribeSQLHistoryListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SQLHistoryList
     */
    public $SQLHistoryList;
    protected $_name = [
        'requestId' => 'RequestId',
        'SQLHistoryList' => 'SQLHistoryList',
    ];

    public function validate()
    {
        if (null !== $this->SQLHistoryList) {
            $this->SQLHistoryList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SQLHistoryList) {
            $res['SQLHistoryList'] = null !== $this->SQLHistoryList ? $this->SQLHistoryList->toArray($noStream) : $this->SQLHistoryList;
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

        if (isset($map['SQLHistoryList'])) {
            $model->SQLHistoryList = SQLHistoryList::fromMap($map['SQLHistoryList']);
        }

        return $model;
    }
}
