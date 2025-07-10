<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody\data\qualityProjectList;

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
     * @var qualityProjectList[]
     */
    public $qualityProjectList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'qualityProjectList' => 'QualityProjectList',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->qualityProjectList)) {
            Model::validateArray($this->qualityProjectList);
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

        if (null !== $this->qualityProjectList) {
            if (\is_array($this->qualityProjectList)) {
                $res['QualityProjectList'] = [];
                $n1 = 0;
                foreach ($this->qualityProjectList as $item1) {
                    $res['QualityProjectList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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

        if (isset($map['QualityProjectList'])) {
            if (!empty($map['QualityProjectList'])) {
                $model->qualityProjectList = [];
                $n1 = 0;
                foreach ($map['QualityProjectList'] as $item1) {
                    $model->qualityProjectList[$n1] = qualityProjectList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
