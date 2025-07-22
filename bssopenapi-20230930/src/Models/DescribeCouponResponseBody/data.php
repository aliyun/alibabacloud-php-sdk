<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody\data\shareUidList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 9929.750000
     *
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $certainAmount;

    /**
     * @example 59243658
     *
     * @var int
     */
    public $couponId;

    /**
     * @example 731074910070
     *
     * @var string
     */
    public $couponNo;

    /**
     * @example CERTAIN
     *
     * @var string
     */
    public $couponType;

    /**
     * @var string
     */
    public $couponTypeName;

    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 2021-03-06T15:12Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string[]
     */
    public $itemNames;

    /**
     * @var string
     */
    public $moneyLimit;

    /**
     * @var string
     */
    public $orderTimeRule;

    /**
     * @example 100.00
     *
     * @var string
     */
    public $remainAmount;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var shareUidList[]
     */
    public $shareUidList;

    /**
     * @example true
     *
     * @var bool
     */
    public $showSetDeductTagButton;

    /**
     * @example CHINA
     *
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @example 2021-03-02T15:12Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example 1902671110151254
     *
     * @var string
     */
    public $suitAccount;

    /**
     * @example all
     *
     * @var string
     */
    public $suitItemType;

    /**
     * @example UNIVERSAL
     *
     * @var string
     */
    public $universalType;

    /**
     * @var string[]
     */
    public $yhOrderTypes;
    protected $_name = [
        'amount' => 'Amount',
        'certainAmount' => 'CertainAmount',
        'couponId' => 'CouponId',
        'couponNo' => 'CouponNo',
        'couponType' => 'CouponType',
        'couponTypeName' => 'CouponTypeName',
        'currency' => 'Currency',
        'endTime' => 'EndTime',
        'gmtCreate' => 'GmtCreate',
        'itemNames' => 'ItemNames',
        'moneyLimit' => 'MoneyLimit',
        'orderTimeRule' => 'OrderTimeRule',
        'remainAmount' => 'RemainAmount',
        'remark' => 'Remark',
        'shareUidList' => 'ShareUidList',
        'showSetDeductTagButton' => 'ShowSetDeductTagButton',
        'site' => 'Site',
        'siteName' => 'SiteName',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'suitAccount' => 'SuitAccount',
        'suitItemType' => 'SuitItemType',
        'universalType' => 'UniversalType',
        'yhOrderTypes' => 'YhOrderTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->certainAmount) {
            $res['CertainAmount'] = $this->certainAmount;
        }
        if (null !== $this->couponId) {
            $res['CouponId'] = $this->couponId;
        }
        if (null !== $this->couponNo) {
            $res['CouponNo'] = $this->couponNo;
        }
        if (null !== $this->couponType) {
            $res['CouponType'] = $this->couponType;
        }
        if (null !== $this->couponTypeName) {
            $res['CouponTypeName'] = $this->couponTypeName;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->itemNames) {
            $res['ItemNames'] = $this->itemNames;
        }
        if (null !== $this->moneyLimit) {
            $res['MoneyLimit'] = $this->moneyLimit;
        }
        if (null !== $this->orderTimeRule) {
            $res['OrderTimeRule'] = $this->orderTimeRule;
        }
        if (null !== $this->remainAmount) {
            $res['RemainAmount'] = $this->remainAmount;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->shareUidList) {
            $res['ShareUidList'] = [];
            if (null !== $this->shareUidList && \is_array($this->shareUidList)) {
                $n = 0;
                foreach ($this->shareUidList as $item) {
                    $res['ShareUidList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->showSetDeductTagButton) {
            $res['ShowSetDeductTagButton'] = $this->showSetDeductTagButton;
        }
        if (null !== $this->site) {
            $res['Site'] = $this->site;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->suitAccount) {
            $res['SuitAccount'] = $this->suitAccount;
        }
        if (null !== $this->suitItemType) {
            $res['SuitItemType'] = $this->suitItemType;
        }
        if (null !== $this->universalType) {
            $res['UniversalType'] = $this->universalType;
        }
        if (null !== $this->yhOrderTypes) {
            $res['YhOrderTypes'] = $this->yhOrderTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['CertainAmount'])) {
            $model->certainAmount = $map['CertainAmount'];
        }
        if (isset($map['CouponId'])) {
            $model->couponId = $map['CouponId'];
        }
        if (isset($map['CouponNo'])) {
            $model->couponNo = $map['CouponNo'];
        }
        if (isset($map['CouponType'])) {
            $model->couponType = $map['CouponType'];
        }
        if (isset($map['CouponTypeName'])) {
            $model->couponTypeName = $map['CouponTypeName'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['ItemNames'])) {
            if (!empty($map['ItemNames'])) {
                $model->itemNames = $map['ItemNames'];
            }
        }
        if (isset($map['MoneyLimit'])) {
            $model->moneyLimit = $map['MoneyLimit'];
        }
        if (isset($map['OrderTimeRule'])) {
            $model->orderTimeRule = $map['OrderTimeRule'];
        }
        if (isset($map['RemainAmount'])) {
            $model->remainAmount = $map['RemainAmount'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ShareUidList'])) {
            if (!empty($map['ShareUidList'])) {
                $model->shareUidList = [];
                $n = 0;
                foreach ($map['ShareUidList'] as $item) {
                    $model->shareUidList[$n++] = null !== $item ? shareUidList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ShowSetDeductTagButton'])) {
            $model->showSetDeductTagButton = $map['ShowSetDeductTagButton'];
        }
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuitAccount'])) {
            $model->suitAccount = $map['SuitAccount'];
        }
        if (isset($map['SuitItemType'])) {
            $model->suitItemType = $map['SuitItemType'];
        }
        if (isset($map['UniversalType'])) {
            $model->universalType = $map['UniversalType'];
        }
        if (isset($map['YhOrderTypes'])) {
            if (!empty($map['YhOrderTypes'])) {
                $model->yhOrderTypes = $map['YhOrderTypes'];
            }
        }

        return $model;
    }
}
