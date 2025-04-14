<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeCouponResponseBody\data\shareUidList;

class data extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var int
     */
    public $couponId;

    /**
     * @var string
     */
    public $couponNo;

    /**
     * @var string
     */
    public $couponType;

    /**
     * @var string
     */
    public $couponTypeName;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $endTime;

    /**
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
     * @var bool
     */
    public $showSetDeductTagButton;

    /**
     * @var string
     */
    public $site;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $suitAccount;

    /**
     * @var string
     */
    public $suitItemType;

    /**
     * @var string
     */
    public $universalType;

    /**
     * @var string[]
     */
    public $yhOrderTypes;
    protected $_name = [
        'amount' => 'Amount',
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

    public function validate()
    {
        if (\is_array($this->itemNames)) {
            Model::validateArray($this->itemNames);
        }
        if (\is_array($this->shareUidList)) {
            Model::validateArray($this->shareUidList);
        }
        if (\is_array($this->yhOrderTypes)) {
            Model::validateArray($this->yhOrderTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
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
            if (\is_array($this->itemNames)) {
                $res['ItemNames'] = [];
                $n1 = 0;
                foreach ($this->itemNames as $item1) {
                    $res['ItemNames'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->shareUidList)) {
                $res['ShareUidList'] = [];
                $n1 = 0;
                foreach ($this->shareUidList as $item1) {
                    $res['ShareUidList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->yhOrderTypes)) {
                $res['YhOrderTypes'] = [];
                $n1 = 0;
                foreach ($this->yhOrderTypes as $item1) {
                    $res['YhOrderTypes'][$n1++] = $item1;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
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
                $model->itemNames = [];
                $n1 = 0;
                foreach ($map['ItemNames'] as $item1) {
                    $model->itemNames[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['ShareUidList'] as $item1) {
                    $model->shareUidList[$n1++] = shareUidList::fromMap($item1);
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
                $model->yhOrderTypes = [];
                $n1 = 0;
                foreach ($map['YhOrderTypes'] as $item1) {
                    $model->yhOrderTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
