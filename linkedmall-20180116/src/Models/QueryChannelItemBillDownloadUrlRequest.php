<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class QueryChannelItemBillDownloadUrlRequest extends Model
{
    /**
     * @example BILL-10000007371****
     *
     * @var string
     */
    public $billId;

    /**
     * @example 2022-11
     *
     * @var string
     */
    public $billPeriod;

    /**
     * @example billGenerated
     *
     * @var string
     */
    public $billStatus;

    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @example 1002****
     *
     * @var int
     */
    public $lmShopId;

    /**
     * @var string
     */
    public $lmShopName;

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
     * @example 12***29
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'billId'     => 'BillId',
        'billPeriod' => 'BillPeriod',
        'billStatus' => 'BillStatus',
        'bizId'      => 'BizId',
        'bizName'    => 'BizName',
        'lmShopId'   => 'LmShopId',
        'lmShopName' => 'LmShopName',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'tenantId'   => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->billPeriod) {
            $res['BillPeriod'] = $this->billPeriod;
        }
        if (null !== $this->billStatus) {
            $res['BillStatus'] = $this->billStatus;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->lmShopName) {
            $res['LmShopName'] = $this->lmShopName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryChannelItemBillDownloadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['BillPeriod'])) {
            $model->billPeriod = $map['BillPeriod'];
        }
        if (isset($map['BillStatus'])) {
            $model->billStatus = $map['BillStatus'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['LmShopName'])) {
            $model->lmShopName = $map['LmShopName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
