<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryResponseBody;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'page'        => 'page',
        'pageSize'    => 'page_size',
        'totalNumber' => 'total_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->totalNumber) {
            $res['total_number'] = $this->totalNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['total_number'])) {
            $model->totalNumber = $map['total_number'];
        }

        return $model;
    }
}
