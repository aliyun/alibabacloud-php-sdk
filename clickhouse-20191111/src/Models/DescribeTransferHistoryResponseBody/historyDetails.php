<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeTransferHistoryResponseBody\historyDetails\historyDetail;

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
        if (\is_array($this->historyDetail)) {
            Model::validateArray($this->historyDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->historyDetail) {
            if (\is_array($this->historyDetail)) {
                $res['HistoryDetail'] = [];
                $n1                   = 0;
                foreach ($this->historyDetail as $item1) {
                    $res['HistoryDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HistoryDetail'])) {
            if (!empty($map['HistoryDetail'])) {
                $model->historyDetail = [];
                $n1                   = 0;
                foreach ($map['HistoryDetail'] as $item1) {
                    $model->historyDetail[$n1++] = historyDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
