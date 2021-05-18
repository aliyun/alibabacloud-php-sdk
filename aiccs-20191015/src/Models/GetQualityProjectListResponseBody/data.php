<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody\data\qualityProjectList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 质检项列表
     *
     * @var qualityProjectList[]
     */
    public $qualityProjectList;

    /**
     * @description PageNo
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Total
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'qualityProjectList' => 'QualityProjectList',
        'pageNo'             => 'PageNo',
        'pageSize'           => 'PageSize',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualityProjectList) {
            $res['QualityProjectList'] = [];
            if (null !== $this->qualityProjectList && \is_array($this->qualityProjectList)) {
                $n = 0;
                foreach ($this->qualityProjectList as $item) {
                    $res['QualityProjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['QualityProjectList'])) {
            if (!empty($map['QualityProjectList'])) {
                $model->qualityProjectList = [];
                $n                         = 0;
                foreach ($map['QualityProjectList'] as $item) {
                    $model->qualityProjectList[$n++] = null !== $item ? qualityProjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
