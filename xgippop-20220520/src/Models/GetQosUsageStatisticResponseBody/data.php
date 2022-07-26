<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosUsageStatisticResponseBody;

use AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosUsageStatisticResponseBody\data\getQosUsageStatisticResList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $curPageNum;

    /**
     * @var getQosUsageStatisticResList[]
     */
    public $getQosUsageStatisticResList;

    /**
     * @var int
     */
    public $numPerPage;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'curPageNum'                  => 'CurPageNum',
        'getQosUsageStatisticResList' => 'GetQosUsageStatisticResList',
        'numPerPage'                  => 'NumPerPage',
        'totalNum'                    => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curPageNum) {
            $res['CurPageNum'] = $this->curPageNum;
        }
        if (null !== $this->getQosUsageStatisticResList) {
            $res['GetQosUsageStatisticResList'] = [];
            if (null !== $this->getQosUsageStatisticResList && \is_array($this->getQosUsageStatisticResList)) {
                $n = 0;
                foreach ($this->getQosUsageStatisticResList as $item) {
                    $res['GetQosUsageStatisticResList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->numPerPage) {
            $res['NumPerPage'] = $this->numPerPage;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['CurPageNum'])) {
            $model->curPageNum = $map['CurPageNum'];
        }
        if (isset($map['GetQosUsageStatisticResList'])) {
            if (!empty($map['GetQosUsageStatisticResList'])) {
                $model->getQosUsageStatisticResList = [];
                $n                                  = 0;
                foreach ($map['GetQosUsageStatisticResList'] as $item) {
                    $model->getQosUsageStatisticResList[$n++] = null !== $item ? getQosUsageStatisticResList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NumPerPage'])) {
            $model->numPerPage = $map['NumPerPage'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
