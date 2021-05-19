<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetCallsPerDayResponseBody;

use AlibabaCloud\SDK\Scsp\V20200702\Models\GetCallsPerDayResponseBody\data\callsPerdayResponseList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var callsPerdayResponseList[]
     */
    public $callsPerdayResponseList;
    protected $_name = [
        'totalNum'                => 'TotalNum',
        'pageSize'                => 'PageSize',
        'pageNo'                  => 'PageNo',
        'callsPerdayResponseList' => 'CallsPerdayResponseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->callsPerdayResponseList) {
            $res['CallsPerdayResponseList'] = [];
            if (null !== $this->callsPerdayResponseList && \is_array($this->callsPerdayResponseList)) {
                $n = 0;
                foreach ($this->callsPerdayResponseList as $item) {
                    $res['CallsPerdayResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['CallsPerdayResponseList'])) {
            if (!empty($map['CallsPerdayResponseList'])) {
                $model->callsPerdayResponseList = [];
                $n                              = 0;
                foreach ($map['CallsPerdayResponseList'] as $item) {
                    $model->callsPerdayResponseList[$n++] = null !== $item ? callsPerdayResponseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
