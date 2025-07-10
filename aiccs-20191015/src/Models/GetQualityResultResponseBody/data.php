<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityResultResponseBody\data\qualityResultResponseList;

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
     * @var qualityResultResponseList[]
     */
    public $qualityResultResponseList;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'qualityResultResponseList' => 'QualityResultResponseList',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
        if (\is_array($this->qualityResultResponseList)) {
            Model::validateArray($this->qualityResultResponseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->qualityResultResponseList) {
            if (\is_array($this->qualityResultResponseList)) {
                $res['QualityResultResponseList'] = [];
                $n1 = 0;
                foreach ($this->qualityResultResponseList as $item1) {
                    $res['QualityResultResponseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
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
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QualityResultResponseList'])) {
            if (!empty($map['QualityResultResponseList'])) {
                $model->qualityResultResponseList = [];
                $n1 = 0;
                foreach ($map['QualityResultResponseList'] as $item1) {
                    $model->qualityResultResponseList[$n1] = qualityResultResponseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
