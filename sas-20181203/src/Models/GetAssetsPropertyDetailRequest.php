<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAssetsPropertyDetailRequest\searchCriteriaList;
use AlibabaCloud\Tea\Model;

class GetAssetsPropertyDetailRequest extends Model
{
    /**
     * @example lkm
     *
     * @var string
     */
    public $biz;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example virtio
     *
     * @var string
     */
    public $itemName;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $remark;

    /**
     * @var searchCriteriaList[]
     */
    public $searchCriteriaList;

    /**
     * @example 38f72ea4-4c9f-4df1-bc6c-0f267614****
     *
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
    }

    public function toMap()
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
            $res['SearchCriteriaList'] = [];
            if (null !== $this->searchCriteriaList && \is_array($this->searchCriteriaList)) {
                $n = 0;
                foreach ($this->searchCriteriaList as $item) {
                    $res['SearchCriteriaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAssetsPropertyDetailRequest
     */
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
                $n                         = 0;
                foreach ($map['SearchCriteriaList'] as $item) {
                    $model->searchCriteriaList[$n++] = null !== $item ? searchCriteriaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
