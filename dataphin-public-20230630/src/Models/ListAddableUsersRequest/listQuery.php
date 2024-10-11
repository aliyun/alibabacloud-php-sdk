<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAddableUsersRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example xx
     *
     * @var string
     */
    public $searchText;
    protected $_name = [
        'page'       => 'Page',
        'pageSize'   => 'PageSize',
        'searchText' => 'SearchText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}
