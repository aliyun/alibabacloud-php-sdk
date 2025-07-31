<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @var string[]
     */
    public $adminIdList;

    /**
     * @example false
     *
     * @var bool
     */
    public $filterMine;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'active' => 'Active',
        'adminIdList' => 'AdminIdList',
        'filterMine' => 'FilterMine',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->adminIdList) {
            $res['AdminIdList'] = $this->adminIdList;
        }
        if (null !== $this->filterMine) {
            $res['FilterMine'] = $this->filterMine;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['AdminIdList'])) {
            if (!empty($map['AdminIdList'])) {
                $model->adminIdList = $map['AdminIdList'];
            }
        }
        if (isset($map['FilterMine'])) {
            $model->filterMine = $map['FilterMine'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
