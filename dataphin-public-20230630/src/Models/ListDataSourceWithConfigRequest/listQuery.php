<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataSourceWithConfigRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $ownerList;

    /**
     * @var int
     */
    public $page;

    /**
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

    public function validate()
    {
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->scopeList)) {
            Model::validateArray($this->scopeList);
        }
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scopeList) {
            if (\is_array($this->scopeList)) {
                $res['ScopeList'] = [];
                $n1 = 0;
                foreach ($this->scopeList as $item1) {
                    $res['ScopeList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['TypeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['TypeList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1++] = $item1;
                }
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
                $model->scopeList = [];
                $n1 = 0;
                foreach ($map['ScopeList'] as $item1) {
                    $model->scopeList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['TypeList'] as $item1) {
                    $model->typeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
