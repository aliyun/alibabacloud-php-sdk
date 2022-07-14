<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageInfo extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalNumber;
    protected $_name = [
        'page'        => 'page',
        'pageSize'    => 'pageSize',
        'totalNumber' => 'totalNumber',
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
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNumber) {
            $res['totalNumber'] = $this->totalNumber;
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
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['totalNumber'])) {
            $model->totalNumber = $map['totalNumber'];
        }

        return $model;
    }
}
