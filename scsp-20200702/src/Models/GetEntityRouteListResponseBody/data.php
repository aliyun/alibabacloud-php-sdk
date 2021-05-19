<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteListResponseBody;

use AlibabaCloud\SDK\Scsp\V20200702\Models\GetEntityRouteListResponseBody\data\entityRouteList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var entityRouteList[]
     */
    public $entityRouteList;

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
    public $total;
    protected $_name = [
        'entityRouteList' => 'EntityRouteList',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityRouteList) {
            $res['EntityRouteList'] = [];
            if (null !== $this->entityRouteList && \is_array($this->entityRouteList)) {
                $n = 0;
                foreach ($this->entityRouteList as $item) {
                    $res['EntityRouteList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['EntityRouteList'])) {
            if (!empty($map['EntityRouteList'])) {
                $model->entityRouteList = [];
                $n                      = 0;
                foreach ($map['EntityRouteList'] as $item) {
                    $model->entityRouteList[$n++] = null !== $item ? entityRouteList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
