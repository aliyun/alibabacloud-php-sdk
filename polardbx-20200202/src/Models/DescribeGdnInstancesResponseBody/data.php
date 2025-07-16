<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeGdnInstancesResponseBody\data\gdnInstanceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var gdnInstanceList[]
     */
    public $gdnInstanceList;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 130
     *
     * @var string
     */
    public $totalNumber;
    protected $_name = [
        'gdnInstanceList' => 'GdnInstanceList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalNumber' => 'TotalNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gdnInstanceList) {
            $res['GdnInstanceList'] = [];
            if (null !== $this->gdnInstanceList && \is_array($this->gdnInstanceList)) {
                $n = 0;
                foreach ($this->gdnInstanceList as $item) {
                    $res['GdnInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
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
        if (isset($map['GdnInstanceList'])) {
            if (!empty($map['GdnInstanceList'])) {
                $model->gdnInstanceList = [];
                $n = 0;
                foreach ($map['GdnInstanceList'] as $item) {
                    $model->gdnInstanceList[$n++] = null !== $item ? gdnInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }

        return $model;
    }
}
