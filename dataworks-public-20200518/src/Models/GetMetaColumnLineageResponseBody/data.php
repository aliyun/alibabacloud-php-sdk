<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaColumnLineageResponseBody\data\dataEntityList;

class data extends Model
{
    /**
     * @var dataEntityList[]
     */
    public $dataEntityList;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataEntityList' => 'DataEntityList',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataEntityList)) {
            Model::validateArray($this->dataEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataEntityList) {
            if (\is_array($this->dataEntityList)) {
                $res['DataEntityList'] = [];
                $n1 = 0;
                foreach ($this->dataEntityList as $item1) {
                    $res['DataEntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DataEntityList'])) {
            if (!empty($map['DataEntityList'])) {
                $model->dataEntityList = [];
                $n1 = 0;
                foreach ($map['DataEntityList'] as $item1) {
                    $model->dataEntityList[$n1++] = dataEntityList::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
