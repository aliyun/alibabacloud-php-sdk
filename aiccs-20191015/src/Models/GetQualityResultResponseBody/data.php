<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponseBody\data\qualityResultResponseList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var qualityResultResponseList[]
     */
    public $qualityResultResponseList;
    protected $_name = [
        'pageNo'                    => 'PageNo',
        'pageSize'                  => 'PageSize',
        'totalNum'                  => 'TotalNum',
        'qualityResultResponseList' => 'QualityResultResponseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->qualityResultResponseList) {
            $res['QualityResultResponseList'] = [];
            if (null !== $this->qualityResultResponseList && \is_array($this->qualityResultResponseList)) {
                $n = 0;
                foreach ($this->qualityResultResponseList as $item) {
                    $res['QualityResultResponseList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['QualityResultResponseList'])) {
            if (!empty($map['QualityResultResponseList'])) {
                $model->qualityResultResponseList = [];
                $n                                = 0;
                foreach ($map['QualityResultResponseList'] as $item) {
                    $model->qualityResultResponseList[$n++] = null !== $item ? qualityResultResponseList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
