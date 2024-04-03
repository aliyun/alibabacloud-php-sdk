<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress;

use AlibabaCloud\Tea\Model;

class rebalanceInfoList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList\rebalanceInfoList[]
     */
    public $rebalanceInfoList;
    protected $_name = [
        'rebalanceInfoList' => 'RebalanceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rebalanceInfoList) {
            $res['RebalanceInfoList'] = [];
            if (null !== $this->rebalanceInfoList && \is_array($this->rebalanceInfoList)) {
                $n = 0;
                foreach ($this->rebalanceInfoList as $item) {
                    $res['RebalanceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rebalanceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RebalanceInfoList'])) {
            if (!empty($map['RebalanceInfoList'])) {
                $model->rebalanceInfoList = [];
                $n                        = 0;
                foreach ($map['RebalanceInfoList'] as $item) {
                    $model->rebalanceInfoList[$n++] = null !== $item ? \AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList\rebalanceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
