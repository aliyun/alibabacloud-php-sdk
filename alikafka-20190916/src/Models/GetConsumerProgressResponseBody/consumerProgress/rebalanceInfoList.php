<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetConsumerProgressResponseBody\consumerProgress\rebalanceInfoList\rebalanceInfoList;

class rebalanceInfoList extends Model
{
    /**
     * @var rebalanceInfoList[]
     */
    public $rebalanceInfoList;
    protected $_name = [
        'rebalanceInfoList' => 'RebalanceInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->rebalanceInfoList)) {
            Model::validateArray($this->rebalanceInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rebalanceInfoList) {
            if (\is_array($this->rebalanceInfoList)) {
                $res['RebalanceInfoList'] = [];
                $n1 = 0;
                foreach ($this->rebalanceInfoList as $item1) {
                    $res['RebalanceInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RebalanceInfoList'])) {
            if (!empty($map['RebalanceInfoList'])) {
                $model->rebalanceInfoList = [];
                $n1 = 0;
                foreach ($map['RebalanceInfoList'] as $item1) {
                    $model->rebalanceInfoList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
