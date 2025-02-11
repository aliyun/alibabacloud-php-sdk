<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var hotlineNumList[]
     */
    public $hotlineNumList;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage'    => 'CurrentPage',
        'hotlineNumList' => 'HotlineNumList',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->hotlineNumList)) {
            Model::validateArray($this->hotlineNumList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->hotlineNumList) {
            if (\is_array($this->hotlineNumList)) {
                $res['HotlineNumList'] = [];
                $n1                    = 0;
                foreach ($this->hotlineNumList as $item1) {
                    $res['HotlineNumList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['HotlineNumList'])) {
            if (!empty($map['HotlineNumList'])) {
                $model->hotlineNumList = [];
                $n1                    = 0;
                foreach ($map['HotlineNumList'] as $item1) {
                    $model->hotlineNumList[$n1++] = hotlineNumList::fromMap($item1);
                }
            }
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
