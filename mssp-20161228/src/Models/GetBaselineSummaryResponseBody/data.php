<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponseBody\data\trendDTOList;

class data extends Model
{
    /**
     * @var trendDTOList[]
     */
    public $trendDTOList;
    protected $_name = [
        'trendDTOList' => 'TrendDTOList',
    ];

    public function validate()
    {
        if (\is_array($this->trendDTOList)) {
            Model::validateArray($this->trendDTOList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trendDTOList) {
            if (\is_array($this->trendDTOList)) {
                $res['TrendDTOList'] = [];
                $n1                  = 0;
                foreach ($this->trendDTOList as $item1) {
                    $res['TrendDTOList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TrendDTOList'])) {
            if (!empty($map['TrendDTOList'])) {
                $model->trendDTOList = [];
                $n1                  = 0;
                foreach ($map['TrendDTOList'] as $item1) {
                    $model->trendDTOList[$n1++] = trendDTOList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
