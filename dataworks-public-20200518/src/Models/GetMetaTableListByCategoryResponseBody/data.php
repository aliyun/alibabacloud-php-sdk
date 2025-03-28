<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableListByCategoryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $tableGuidList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'tableGuidList' => 'TableGuidList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tableGuidList)) {
            Model::validateArray($this->tableGuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->tableGuidList) {
            if (\is_array($this->tableGuidList)) {
                $res['TableGuidList'] = [];
                $n1 = 0;
                foreach ($this->tableGuidList as $item1) {
                    $res['TableGuidList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TableGuidList'])) {
            if (!empty($map['TableGuidList'])) {
                $model->tableGuidList = [];
                $n1 = 0;
                foreach ($map['TableGuidList'] as $item1) {
                    $model->tableGuidList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
