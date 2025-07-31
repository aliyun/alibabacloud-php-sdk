<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example vcns-test
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $ownerList;

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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $scopeList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'name' => 'Name',
        'ownerList' => 'OwnerList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'scopeList' => 'ScopeList',
        'tag' => 'Tag',
        'typeList' => 'TypeList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerList) {
            $res['OwnerList'] = $this->ownerList;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->scopeList) {
            $res['ScopeList'] = $this->scopeList;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = $map['OwnerList'];
            }
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ScopeList'])) {
            if (!empty($map['ScopeList'])) {
                $model->scopeList = $map['ScopeList'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = $map['TypeList'];
            }
        }

        return $model;
    }
}
