<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class GetAuditItemListRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $customResult;

    /**
     * @var string
     */
    public $customRiskType;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $rcpResult;

    /**
     * @var string
     */
    public $rcpRiskType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizType'        => 'BizType',
        'currentPage'    => 'CurrentPage',
        'customResult'   => 'CustomResult',
        'customRiskType' => 'CustomRiskType',
        'dataId'         => 'DataId',
        'endDate'        => 'EndDate',
        'pageSize'       => 'PageSize',
        'rcpResult'      => 'RcpResult',
        'rcpRiskType'    => 'RcpRiskType',
        'startDate'      => 'StartDate',
        'taskId'         => 'TaskId',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->customResult) {
            $res['CustomResult'] = $this->customResult;
        }
        if (null !== $this->customRiskType) {
            $res['CustomRiskType'] = $this->customRiskType;
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rcpResult) {
            $res['RcpResult'] = $this->rcpResult;
        }
        if (null !== $this->rcpRiskType) {
            $res['RcpRiskType'] = $this->rcpRiskType;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAuditItemListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CustomResult'])) {
            $model->customResult = $map['CustomResult'];
        }
        if (isset($map['CustomRiskType'])) {
            $model->customRiskType = $map['CustomRiskType'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RcpResult'])) {
            $model->rcpResult = $map['RcpResult'];
        }
        if (isset($map['RcpRiskType'])) {
            $model->rcpRiskType = $map['RcpRiskType'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
