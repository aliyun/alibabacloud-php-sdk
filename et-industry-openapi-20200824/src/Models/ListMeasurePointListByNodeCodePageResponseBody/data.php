<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\ListMeasurePointListByNodeCodePageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\ListMeasurePointListByNodeCodePageResponseBody\data\dataList;

class data extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'count' => 'Count',
        'currentPage' => 'CurrentPage',
        'dataList' => 'DataList',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1++] = dataList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
