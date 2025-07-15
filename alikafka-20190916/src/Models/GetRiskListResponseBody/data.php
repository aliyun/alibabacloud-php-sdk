<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetRiskListResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetRiskListResponseBody\data\riskList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var riskList[]
     */
    public $riskList;

    /**
     * @example 11
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'riskList' => 'RiskList',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskList) {
            $res['RiskList'] = [];
            if (null !== $this->riskList && \is_array($this->riskList)) {
                $n = 0;
                foreach ($this->riskList as $item) {
                    $res['RiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n = 0;
                foreach ($map['RiskList'] as $item) {
                    $model->riskList[$n++] = null !== $item ? riskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
