<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryStatementsRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @example 2021-09-01 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example {}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ""
     *
     * @var string
     */
    public $payeeIds;

    /**
     * @example ""
     *
     * @var string
     */
    public $settleNoes;

    /**
     * @example ""
     *
     * @var string
     */
    public $settleStatus;

    /**
     * @example ""
     *
     * @var string
     */
    public $settleType;

    /**
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 18******263
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'bizId'        => 'BizId',
        'currency'     => 'Currency',
        'endTime'      => 'EndTime',
        'extInfo'      => 'ExtInfo',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'payeeIds'     => 'PayeeIds',
        'settleNoes'   => 'SettleNoes',
        'settleStatus' => 'SettleStatus',
        'settleType'   => 'SettleType',
        'startTime'    => 'StartTime',
        'tenantId'     => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->payeeIds) {
            $res['PayeeIds'] = $this->payeeIds;
        }
        if (null !== $this->settleNoes) {
            $res['SettleNoes'] = $this->settleNoes;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->settleType) {
            $res['SettleType'] = $this->settleType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStatementsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PayeeIds'])) {
            $model->payeeIds = $map['PayeeIds'];
        }
        if (isset($map['SettleNoes'])) {
            $model->settleNoes = $map['SettleNoes'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['SettleType'])) {
            $model->settleType = $map['SettleType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
