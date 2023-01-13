<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceMessageRoutingResponse\data\messageRouteList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var messageRouteList
     */
    public $messageRouteList;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'pageSize'         => 'PageSize',
        'total'            => 'Total',
        'messageRouteList' => 'MessageRouteList',
    ];

    public function validate()
    {
        Model::validateRequired('currentPage', $this->currentPage, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('messageRouteList', $this->messageRouteList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->messageRouteList) {
            $res['MessageRouteList'] = null !== $this->messageRouteList ? $this->messageRouteList->toMap() : null;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['MessageRouteList'])) {
            $model->messageRouteList = messageRouteList::fromMap($map['MessageRouteList']);
        }

        return $model;
    }
}
