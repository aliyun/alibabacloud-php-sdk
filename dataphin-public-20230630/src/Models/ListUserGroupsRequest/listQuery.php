<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListUserGroupsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string[]
     */
    public $adminIdList;

    /**
     * @var bool
     */
    public $filterMine;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
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

    public function validate()
    {
        if (\is_array($this->adminIdList)) {
            Model::validateArray($this->adminIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->adminIdList) {
            if (\is_array($this->adminIdList)) {
                $res['AdminIdList'] = [];
                $n1 = 0;
                foreach ($this->adminIdList as $item1) {
                    $res['AdminIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AdminIdList'])) {
            if (!empty($map['AdminIdList'])) {
                $model->adminIdList = [];
                $n1 = 0;
                foreach ($map['AdminIdList'] as $item1) {
                    $model->adminIdList[$n1++] = $item1;
                }
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
