<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\networkAttackTrendDTO\trendList;

class networkAttackTrendDTO extends Model
{
    /**
     * @var trendList[]
     */
    public $trendList;
    protected $_name = [
        'trendList' => 'TrendList',
    ];

    public function validate()
    {
        if (\is_array($this->trendList)) {
            Model::validateArray($this->trendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trendList) {
            if (\is_array($this->trendList)) {
                $res['TrendList'] = [];
                $n1 = 0;
                foreach ($this->trendList as $item1) {
                    $res['TrendList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TrendList'])) {
            if (!empty($map['TrendList'])) {
                $model->trendList = [];
                $n1 = 0;
                foreach ($map['TrendList'] as $item1) {
                    $model->trendList[$n1] = trendList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
