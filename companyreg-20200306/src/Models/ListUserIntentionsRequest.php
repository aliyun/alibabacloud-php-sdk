<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class ListUserIntentionsRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @example esp.companyreg_cloud
     *
     * @var string
     */
    public $bizType;

    /**
     * @example esp.bookkeeping,esp.bookkeeping_cloud
     *
     * @var string
     */
    public $bizTypes;

    /**
     * @example I20210917170147000001
     *
     * @var string
     */
    public $intentionBizId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example UpdateTime
     *
     * @var string
     */
    public $sortFiled;

    /**
     * @example desc
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @example 37
     *
     * @var int
     */
    public $status;

    /**
     * @var bool
     */
    public $withExtInfo;
    protected $_name = [
        'area'           => 'Area',
        'bizType'        => 'BizType',
        'bizTypes'       => 'BizTypes',
        'intentionBizId' => 'IntentionBizId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'sortFiled'      => 'SortFiled',
        'sortOrder'      => 'SortOrder',
        'status'         => 'Status',
        'withExtInfo'    => 'WithExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizTypes) {
            $res['BizTypes'] = $this->bizTypes;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortFiled) {
            $res['SortFiled'] = $this->sortFiled;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->withExtInfo) {
            $res['WithExtInfo'] = $this->withExtInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserIntentionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizTypes'])) {
            $model->bizTypes = $map['BizTypes'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortFiled'])) {
            $model->sortFiled = $map['SortFiled'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WithExtInfo'])) {
            $model->withExtInfo = $map['WithExtInfo'];
        }

        return $model;
    }
}
