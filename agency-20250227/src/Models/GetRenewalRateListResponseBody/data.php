<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetRenewalRateListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $customerAdjustedRenewalAmountDue;
    /**
     * @var float
     */
    public $customerOtherBillAmount;
    /**
     * @var float
     */
    public $finalCustomerRenewalAmountDue;
    /**
     * @var float
     */
    public $finalCustomerRenewalRate;
    /**
     * @var float
     */
    public $finalCustomerRenewedAmount;
    /**
     * @var float
     */
    public $finalOtherBillAmount;
    /**
     * @var float
     */
    public $finalRenewalAmountDue;
    /**
     * @var float
     */
    public $finalRenewalRate;
    /**
     * @var float
     */
    public $finalRenewedAmount;
    /**
     * @var float
     */
    public $finalSubPartnerRenewalAmountDue;
    /**
     * @var float
     */
    public $finalSubPartnerRenewalRate;
    /**
     * @var float
     */
    public $finalSubPartnerRenewedAmount;
    /**
     * @var string
     */
    public $fiscalYearAndQuarter;
    /**
     * @var string
     */
    public $masterPid;
    /**
     * @var string
     */
    public $masterPidName;
    /**
     * @var float
     */
    public $specialCustomerRenewRatio;
    /**
     * @var float
     */
    public $specialCustomerRenewalAmountDue;
    /**
     * @var float
     */
    public $specialCustomerRenewedAmount;
    /**
     * @var float
     */
    public $specialFinalRenewRatio;
    /**
     * @var float
     */
    public $specialFinalRenewalAmountDue;
    /**
     * @var float
     */
    public $specialFinalRenewedAmount;
    /**
     * @var float
     */
    public $specialSubPartnerRenewRatio;
    /**
     * @var float
     */
    public $specialSubPartnerRenewalAmountDue;
    /**
     * @var float
     */
    public $specialSubPartnerRenewedAmount;
    /**
     * @var float
     */
    public $subPartnerAdjustedRenewalAmountDue;
    /**
     * @var float
     */
    public $subPartnerOtherBillAmount;
    protected $_name = [
        'customerAdjustedRenewalAmountDue'   => 'CustomerAdjustedRenewalAmountDue',
        'customerOtherBillAmount'            => 'CustomerOtherBillAmount',
        'finalCustomerRenewalAmountDue'      => 'FinalCustomerRenewalAmountDue',
        'finalCustomerRenewalRate'           => 'FinalCustomerRenewalRate',
        'finalCustomerRenewedAmount'         => 'FinalCustomerRenewedAmount',
        'finalOtherBillAmount'               => 'FinalOtherBillAmount',
        'finalRenewalAmountDue'              => 'FinalRenewalAmountDue',
        'finalRenewalRate'                   => 'FinalRenewalRate',
        'finalRenewedAmount'                 => 'FinalRenewedAmount',
        'finalSubPartnerRenewalAmountDue'    => 'FinalSubPartnerRenewalAmountDue',
        'finalSubPartnerRenewalRate'         => 'FinalSubPartnerRenewalRate',
        'finalSubPartnerRenewedAmount'       => 'FinalSubPartnerRenewedAmount',
        'fiscalYearAndQuarter'               => 'FiscalYearAndQuarter',
        'masterPid'                          => 'MasterPid',
        'masterPidName'                      => 'MasterPidName',
        'specialCustomerRenewRatio'          => 'SpecialCustomerRenewRatio',
        'specialCustomerRenewalAmountDue'    => 'SpecialCustomerRenewalAmountDue',
        'specialCustomerRenewedAmount'       => 'SpecialCustomerRenewedAmount',
        'specialFinalRenewRatio'             => 'SpecialFinalRenewRatio',
        'specialFinalRenewalAmountDue'       => 'SpecialFinalRenewalAmountDue',
        'specialFinalRenewedAmount'          => 'SpecialFinalRenewedAmount',
        'specialSubPartnerRenewRatio'        => 'SpecialSubPartnerRenewRatio',
        'specialSubPartnerRenewalAmountDue'  => 'SpecialSubPartnerRenewalAmountDue',
        'specialSubPartnerRenewedAmount'     => 'SpecialSubPartnerRenewedAmount',
        'subPartnerAdjustedRenewalAmountDue' => 'SubPartnerAdjustedRenewalAmountDue',
        'subPartnerOtherBillAmount'          => 'SubPartnerOtherBillAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerAdjustedRenewalAmountDue) {
            $res['CustomerAdjustedRenewalAmountDue'] = $this->customerAdjustedRenewalAmountDue;
        }

        if (null !== $this->customerOtherBillAmount) {
            $res['CustomerOtherBillAmount'] = $this->customerOtherBillAmount;
        }

        if (null !== $this->finalCustomerRenewalAmountDue) {
            $res['FinalCustomerRenewalAmountDue'] = $this->finalCustomerRenewalAmountDue;
        }

        if (null !== $this->finalCustomerRenewalRate) {
            $res['FinalCustomerRenewalRate'] = $this->finalCustomerRenewalRate;
        }

        if (null !== $this->finalCustomerRenewedAmount) {
            $res['FinalCustomerRenewedAmount'] = $this->finalCustomerRenewedAmount;
        }

        if (null !== $this->finalOtherBillAmount) {
            $res['FinalOtherBillAmount'] = $this->finalOtherBillAmount;
        }

        if (null !== $this->finalRenewalAmountDue) {
            $res['FinalRenewalAmountDue'] = $this->finalRenewalAmountDue;
        }

        if (null !== $this->finalRenewalRate) {
            $res['FinalRenewalRate'] = $this->finalRenewalRate;
        }

        if (null !== $this->finalRenewedAmount) {
            $res['FinalRenewedAmount'] = $this->finalRenewedAmount;
        }

        if (null !== $this->finalSubPartnerRenewalAmountDue) {
            $res['FinalSubPartnerRenewalAmountDue'] = $this->finalSubPartnerRenewalAmountDue;
        }

        if (null !== $this->finalSubPartnerRenewalRate) {
            $res['FinalSubPartnerRenewalRate'] = $this->finalSubPartnerRenewalRate;
        }

        if (null !== $this->finalSubPartnerRenewedAmount) {
            $res['FinalSubPartnerRenewedAmount'] = $this->finalSubPartnerRenewedAmount;
        }

        if (null !== $this->fiscalYearAndQuarter) {
            $res['FiscalYearAndQuarter'] = $this->fiscalYearAndQuarter;
        }

        if (null !== $this->masterPid) {
            $res['MasterPid'] = $this->masterPid;
        }

        if (null !== $this->masterPidName) {
            $res['MasterPidName'] = $this->masterPidName;
        }

        if (null !== $this->specialCustomerRenewRatio) {
            $res['SpecialCustomerRenewRatio'] = $this->specialCustomerRenewRatio;
        }

        if (null !== $this->specialCustomerRenewalAmountDue) {
            $res['SpecialCustomerRenewalAmountDue'] = $this->specialCustomerRenewalAmountDue;
        }

        if (null !== $this->specialCustomerRenewedAmount) {
            $res['SpecialCustomerRenewedAmount'] = $this->specialCustomerRenewedAmount;
        }

        if (null !== $this->specialFinalRenewRatio) {
            $res['SpecialFinalRenewRatio'] = $this->specialFinalRenewRatio;
        }

        if (null !== $this->specialFinalRenewalAmountDue) {
            $res['SpecialFinalRenewalAmountDue'] = $this->specialFinalRenewalAmountDue;
        }

        if (null !== $this->specialFinalRenewedAmount) {
            $res['SpecialFinalRenewedAmount'] = $this->specialFinalRenewedAmount;
        }

        if (null !== $this->specialSubPartnerRenewRatio) {
            $res['SpecialSubPartnerRenewRatio'] = $this->specialSubPartnerRenewRatio;
        }

        if (null !== $this->specialSubPartnerRenewalAmountDue) {
            $res['SpecialSubPartnerRenewalAmountDue'] = $this->specialSubPartnerRenewalAmountDue;
        }

        if (null !== $this->specialSubPartnerRenewedAmount) {
            $res['SpecialSubPartnerRenewedAmount'] = $this->specialSubPartnerRenewedAmount;
        }

        if (null !== $this->subPartnerAdjustedRenewalAmountDue) {
            $res['SubPartnerAdjustedRenewalAmountDue'] = $this->subPartnerAdjustedRenewalAmountDue;
        }

        if (null !== $this->subPartnerOtherBillAmount) {
            $res['SubPartnerOtherBillAmount'] = $this->subPartnerOtherBillAmount;
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
        if (isset($map['CustomerAdjustedRenewalAmountDue'])) {
            $model->customerAdjustedRenewalAmountDue = $map['CustomerAdjustedRenewalAmountDue'];
        }

        if (isset($map['CustomerOtherBillAmount'])) {
            $model->customerOtherBillAmount = $map['CustomerOtherBillAmount'];
        }

        if (isset($map['FinalCustomerRenewalAmountDue'])) {
            $model->finalCustomerRenewalAmountDue = $map['FinalCustomerRenewalAmountDue'];
        }

        if (isset($map['FinalCustomerRenewalRate'])) {
            $model->finalCustomerRenewalRate = $map['FinalCustomerRenewalRate'];
        }

        if (isset($map['FinalCustomerRenewedAmount'])) {
            $model->finalCustomerRenewedAmount = $map['FinalCustomerRenewedAmount'];
        }

        if (isset($map['FinalOtherBillAmount'])) {
            $model->finalOtherBillAmount = $map['FinalOtherBillAmount'];
        }

        if (isset($map['FinalRenewalAmountDue'])) {
            $model->finalRenewalAmountDue = $map['FinalRenewalAmountDue'];
        }

        if (isset($map['FinalRenewalRate'])) {
            $model->finalRenewalRate = $map['FinalRenewalRate'];
        }

        if (isset($map['FinalRenewedAmount'])) {
            $model->finalRenewedAmount = $map['FinalRenewedAmount'];
        }

        if (isset($map['FinalSubPartnerRenewalAmountDue'])) {
            $model->finalSubPartnerRenewalAmountDue = $map['FinalSubPartnerRenewalAmountDue'];
        }

        if (isset($map['FinalSubPartnerRenewalRate'])) {
            $model->finalSubPartnerRenewalRate = $map['FinalSubPartnerRenewalRate'];
        }

        if (isset($map['FinalSubPartnerRenewedAmount'])) {
            $model->finalSubPartnerRenewedAmount = $map['FinalSubPartnerRenewedAmount'];
        }

        if (isset($map['FiscalYearAndQuarter'])) {
            $model->fiscalYearAndQuarter = $map['FiscalYearAndQuarter'];
        }

        if (isset($map['MasterPid'])) {
            $model->masterPid = $map['MasterPid'];
        }

        if (isset($map['MasterPidName'])) {
            $model->masterPidName = $map['MasterPidName'];
        }

        if (isset($map['SpecialCustomerRenewRatio'])) {
            $model->specialCustomerRenewRatio = $map['SpecialCustomerRenewRatio'];
        }

        if (isset($map['SpecialCustomerRenewalAmountDue'])) {
            $model->specialCustomerRenewalAmountDue = $map['SpecialCustomerRenewalAmountDue'];
        }

        if (isset($map['SpecialCustomerRenewedAmount'])) {
            $model->specialCustomerRenewedAmount = $map['SpecialCustomerRenewedAmount'];
        }

        if (isset($map['SpecialFinalRenewRatio'])) {
            $model->specialFinalRenewRatio = $map['SpecialFinalRenewRatio'];
        }

        if (isset($map['SpecialFinalRenewalAmountDue'])) {
            $model->specialFinalRenewalAmountDue = $map['SpecialFinalRenewalAmountDue'];
        }

        if (isset($map['SpecialFinalRenewedAmount'])) {
            $model->specialFinalRenewedAmount = $map['SpecialFinalRenewedAmount'];
        }

        if (isset($map['SpecialSubPartnerRenewRatio'])) {
            $model->specialSubPartnerRenewRatio = $map['SpecialSubPartnerRenewRatio'];
        }

        if (isset($map['SpecialSubPartnerRenewalAmountDue'])) {
            $model->specialSubPartnerRenewalAmountDue = $map['SpecialSubPartnerRenewalAmountDue'];
        }

        if (isset($map['SpecialSubPartnerRenewedAmount'])) {
            $model->specialSubPartnerRenewedAmount = $map['SpecialSubPartnerRenewedAmount'];
        }

        if (isset($map['SubPartnerAdjustedRenewalAmountDue'])) {
            $model->subPartnerAdjustedRenewalAmountDue = $map['SubPartnerAdjustedRenewalAmountDue'];
        }

        if (isset($map['SubPartnerOtherBillAmount'])) {
            $model->subPartnerOtherBillAmount = $map['SubPartnerOtherBillAmount'];
        }

        return $model;
    }
}
