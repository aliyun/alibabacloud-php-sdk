<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTemplatesResponseBody\resultContent\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMdsCubeTemplatesResponseBody\resultContent\data\content\list_;

class content extends Model
{
    /**
     * @var bool
     */
    public $firstPage;

    /**
     * @var int
     */
    public $firstResult;

    /**
     * @var bool
     */
    public $lastPage;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $nextPage;

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
    public $prePage;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'firstPage' => 'FirstPage',
        'firstResult' => 'FirstResult',
        'lastPage' => 'LastPage',
        'list' => 'List',
        'nextPage' => 'NextPage',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'prePage' => 'PrePage',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firstPage) {
            $res['FirstPage'] = $this->firstPage;
        }

        if (null !== $this->firstResult) {
            $res['FirstResult'] = $this->firstResult;
        }

        if (null !== $this->lastPage) {
            $res['LastPage'] = $this->lastPage;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prePage) {
            $res['PrePage'] = $this->prePage;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FirstPage'])) {
            $model->firstPage = $map['FirstPage'];
        }

        if (isset($map['FirstResult'])) {
            $model->firstResult = $map['FirstResult'];
        }

        if (isset($map['LastPage'])) {
            $model->lastPage = $map['LastPage'];
        }

        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1] = list_::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrePage'])) {
            $model->prePage = $map['PrePage'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
