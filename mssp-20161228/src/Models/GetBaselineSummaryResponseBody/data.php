<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponseBody;

use AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponseBody\data\trendDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Collection of baseline statistical data.
     *
     * @var trendDTOList[]
     */
    public $trendDTOList;
    protected $_name = [
        'trendDTOList' => 'TrendDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trendDTOList) {
            $res['TrendDTOList'] = [];
            if (null !== $this->trendDTOList && \is_array($this->trendDTOList)) {
                $n = 0;
                foreach ($this->trendDTOList as $item) {
                    $res['TrendDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TrendDTOList'])) {
            if (!empty($map['TrendDTOList'])) {
                $model->trendDTOList = [];
                $n                   = 0;
                foreach ($map['TrendDTOList'] as $item) {
                    $model->trendDTOList[$n++] = null !== $item ? trendDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
