<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryIntlFixedPriceOrderListResponseBody\module\data;

class module extends Model
{
    /**
     * @var int
     */
    public $currentPageNum;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalItemNum;

    /**
     * @var int
     */
    public $totalPageNum;
    protected $_name = [
        'currentPageNum' => 'CurrentPageNum',
        'data' => 'Data',
        'pageSize' => 'PageSize',
        'totalItemNum' => 'TotalItemNum',
        'totalPageNum' => 'TotalPageNum',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPageNum) {
            $res['CurrentPageNum'] = $this->currentPageNum;
        }

        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->totalItemNum) {
            $res['TotalItemNum'] = $this->totalItemNum;
        }

        if (null !== $this->totalPageNum) {
            $res['TotalPageNum'] = $this->totalPageNum;
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
        if (isset($map['CurrentPageNum'])) {
            $model->currentPageNum = $map['CurrentPageNum'];
        }

        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TotalItemNum'])) {
            $model->totalItemNum = $map['TotalItemNum'];
        }

        if (isset($map['TotalPageNum'])) {
            $model->totalPageNum = $map['TotalPageNum'];
        }

        return $model;
    }
}
