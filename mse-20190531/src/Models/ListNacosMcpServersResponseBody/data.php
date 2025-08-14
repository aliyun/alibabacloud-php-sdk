<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosMcpServersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosMcpServersResponseBody\data\pageItems;

class data extends Model
{
    /**
     * @var pageItems[]
     */
    public $pageItems;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pagesAvailable;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageItems' => 'PageItems',
        'pageNumber' => 'PageNumber',
        'pagesAvailable' => 'PagesAvailable',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->pageItems)) {
            Model::validateArray($this->pageItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageItems) {
            if (\is_array($this->pageItems)) {
                $res['PageItems'] = [];
                $n1 = 0;
                foreach ($this->pageItems as $item1) {
                    $res['PageItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pagesAvailable) {
            $res['PagesAvailable'] = $this->pagesAvailable;
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
        if (isset($map['PageItems'])) {
            if (!empty($map['PageItems'])) {
                $model->pageItems = [];
                $n1 = 0;
                foreach ($map['PageItems'] as $item1) {
                    $model->pageItems[$n1] = pageItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PagesAvailable'])) {
            $model->pagesAvailable = $map['PagesAvailable'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
