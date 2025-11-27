<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogReportListResponseBody\items\item\latencyTopNItems\latencyTopNItem;

class latencyTopNItems extends Model
{
    /**
     * @var latencyTopNItem[]
     */
    public $latencyTopNItem;
    protected $_name = [
        'latencyTopNItem' => 'LatencyTopNItem',
    ];

    public function validate()
    {
        if (\is_array($this->latencyTopNItem)) {
            Model::validateArray($this->latencyTopNItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->latencyTopNItem) {
            if (\is_array($this->latencyTopNItem)) {
                $res['LatencyTopNItem'] = [];
                $n1 = 0;
                foreach ($this->latencyTopNItem as $item1) {
                    $res['LatencyTopNItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['LatencyTopNItem'])) {
            if (!empty($map['LatencyTopNItem'])) {
                $model->latencyTopNItem = [];
                $n1 = 0;
                foreach ($map['LatencyTopNItem'] as $item1) {
                    $model->latencyTopNItem[$n1] = latencyTopNItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
