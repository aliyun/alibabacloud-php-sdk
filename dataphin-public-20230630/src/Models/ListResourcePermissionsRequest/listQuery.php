<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $searchText;

    /**
     * @description This parameter is required.
     *
     * @example TABLE
     *
     * @var string
     */
    public $tabType;
    protected $_name = [
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'searchText' => 'SearchText',
        'tabType' => 'TabType',
    ];

    public function validate() {}

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
        if (null !== $this->tabType) {
            $res['TabType'] = $this->tabType;
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
        if (isset($map['TabType'])) {
            $model->tabType = $map['TabType'];
        }

        return $model;
    }
}
