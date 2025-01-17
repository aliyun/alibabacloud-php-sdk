<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailRequest\searchCriteriaList;

class GetAssetsPropertyDetailRequest extends Model
{
    /**
     * @var string
     */
    public $biz;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $itemName;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $remark;
    /**
     * @var searchCriteriaList[]
     */
    public $searchCriteriaList;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'biz'                => 'Biz',
        'currentPage'        => 'CurrentPage',
        'itemName'           => 'ItemName',
        'lang'               => 'Lang',
        'pageSize'           => 'PageSize',
        'remark'             => 'Remark',
        'searchCriteriaList' => 'SearchCriteriaList',
        'uuid'               => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->searchCriteriaList)) {
            Model::validateArray($this->searchCriteriaList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->searchCriteriaList) {
            if (\is_array($this->searchCriteriaList)) {
                $res['SearchCriteriaList'] = [];
                $n1                        = 0;
                foreach ($this->searchCriteriaList as $item1) {
                    $res['SearchCriteriaList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['SearchCriteriaList'])) {
            if (!empty($map['SearchCriteriaList'])) {
                $model->searchCriteriaList = [];
                $n1                        = 0;
                foreach ($map['SearchCriteriaList'] as $item1) {
                    $model->searchCriteriaList[$n1++] = searchCriteriaList::fromMap($item1);
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
