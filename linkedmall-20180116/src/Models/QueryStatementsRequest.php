<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryStatementsRequest extends Model
{
    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $payeeIds;

    /**
     * @var string
     */
    public $settleNoes;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $settleStatus;

    /**
     * @var string
     */
    public $settleType;

    /**
     * @var string
     */
    public $extInfo;
    protected $_name = [
        'tenantId'     => 'TenantId',
        'payeeIds'     => 'PayeeIds',
        'settleNoes'   => 'SettleNoes',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'pageSize'     => 'PageSize',
        'pageNumber'   => 'PageNumber',
        'settleStatus' => 'SettleStatus',
        'settleType'   => 'SettleType',
        'extInfo'      => 'ExtInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->payeeIds) {
            $res['PayeeIds'] = $this->payeeIds;
        }
        if (null !== $this->settleNoes) {
            $res['SettleNoes'] = $this->settleNoes;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->settleStatus) {
            $res['SettleStatus'] = $this->settleStatus;
        }
        if (null !== $this->settleType) {
            $res['SettleType'] = $this->settleType;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['PayeeIds'])) {
            $model->payeeIds = $map['PayeeIds'];
        }
        if (isset($map['SettleNoes'])) {
            $model->settleNoes = $map['SettleNoes'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['SettleStatus'])) {
            $model->settleStatus = $map['SettleStatus'];
        }
        if (isset($map['SettleType'])) {
            $model->settleType = $map['SettleType'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }

        return $model;
    }
}
