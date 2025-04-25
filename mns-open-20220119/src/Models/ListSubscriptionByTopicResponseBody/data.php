<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mnsopen\V20220119\Models\ListSubscriptionByTopicResponseBody\data\pageData;

class data extends Model
{
    /**
     * @var pageData[]
     */
    public $pageData;

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
    public $pages;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'pageData' => 'PageData',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'pages' => 'Pages',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->pageData)) {
            Model::validateArray($this->pageData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageData) {
            if (\is_array($this->pageData)) {
                $res['PageData'] = [];
                $n1 = 0;
                foreach ($this->pageData as $item1) {
                    $res['PageData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pages) {
            $res['Pages'] = $this->pages;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['PageData'])) {
            if (!empty($map['PageData'])) {
                $model->pageData = [];
                $n1 = 0;
                foreach ($map['PageData'] as $item1) {
                    $model->pageData[$n1++] = pageData::fromMap($item1);
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Pages'])) {
            $model->pages = $map['Pages'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
