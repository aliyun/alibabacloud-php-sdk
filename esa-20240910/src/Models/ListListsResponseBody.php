<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListListsResponseBody\lists;

class ListListsResponseBody extends Model
{
    /**
     * @var int
     */
    public $itemsUsage;

    /**
     * @var lists[]
     */
    public $lists;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $usage;
    protected $_name = [
        'itemsUsage' => 'ItemsUsage',
        'lists' => 'Lists',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->lists)) {
            Model::validateArray($this->lists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemsUsage) {
            $res['ItemsUsage'] = $this->itemsUsage;
        }

        if (null !== $this->lists) {
            if (\is_array($this->lists)) {
                $res['Lists'] = [];
                $n1 = 0;
                foreach ($this->lists as $item1) {
                    $res['Lists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['ItemsUsage'])) {
            $model->itemsUsage = $map['ItemsUsage'];
        }

        if (isset($map['Lists'])) {
            if (!empty($map['Lists'])) {
                $model->lists = [];
                $n1 = 0;
                foreach ($map['Lists'] as $item1) {
                    $model->lists[$n1] = lists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
