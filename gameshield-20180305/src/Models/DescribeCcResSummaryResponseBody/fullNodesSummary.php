<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcResSummaryResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcResSummaryResponseBody\fullNodesSummary\NGResInfoList;
use AlibabaCloud\Tea\Model;

class fullNodesSummary extends Model
{
    /**
     * @var int
     */
    public $unUsedQps;

    /**
     * @var int
     */
    public $usedQps;

    /**
     * @var int
     */
    public $totalQps;

    /**
     * @var NGResInfoList[]
     */
    public $NGResInfoList;
    protected $_name = [
        'unUsedQps'     => 'UnUsedQps',
        'usedQps'       => 'UsedQps',
        'totalQps'      => 'TotalQps',
        'NGResInfoList' => 'NGResInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unUsedQps) {
            $res['UnUsedQps'] = $this->unUsedQps;
        }
        if (null !== $this->usedQps) {
            $res['UsedQps'] = $this->usedQps;
        }
        if (null !== $this->totalQps) {
            $res['TotalQps'] = $this->totalQps;
        }
        if (null !== $this->NGResInfoList) {
            $res['NGResInfoList'] = [];
            if (null !== $this->NGResInfoList && \is_array($this->NGResInfoList)) {
                $n = 0;
                foreach ($this->NGResInfoList as $item) {
                    $res['NGResInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullNodesSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UnUsedQps'])) {
            $model->unUsedQps = $map['UnUsedQps'];
        }
        if (isset($map['UsedQps'])) {
            $model->usedQps = $map['UsedQps'];
        }
        if (isset($map['TotalQps'])) {
            $model->totalQps = $map['TotalQps'];
        }
        if (isset($map['NGResInfoList'])) {
            if (!empty($map['NGResInfoList'])) {
                $model->NGResInfoList = [];
                $n                    = 0;
                foreach ($map['NGResInfoList'] as $item) {
                    $model->NGResInfoList[$n++] = null !== $item ? NGResInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
