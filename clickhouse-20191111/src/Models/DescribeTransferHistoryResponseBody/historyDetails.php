<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails\historyDetail;
use AlibabaCloud\Tea\Model;

class historyDetails extends Model
{
    /**
     * @var historyDetail[]
     */
    public $historyDetail;
    protected $_name = [
        'historyDetail' => 'HistoryDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->historyDetail) {
            $res['HistoryDetail'] = [];
            if (null !== $this->historyDetail && \is_array($this->historyDetail)) {
                $n = 0;
                foreach ($this->historyDetail as $item) {
                    $res['HistoryDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HistoryDetail'])) {
            if (!empty($map['HistoryDetail'])) {
                $model->historyDetail = [];
                $n                    = 0;
                foreach ($map['HistoryDetail'] as $item) {
                    $model->historyDetail[$n++] = null !== $item ? historyDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
