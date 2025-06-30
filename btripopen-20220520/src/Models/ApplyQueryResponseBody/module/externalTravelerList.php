<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\externalTravelerList\hotelCitys;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyQueryResponseBody\module\externalTravelerList\hotelIntlCitys;

class externalTravelerList extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var int
     */
    public $businessDiscount;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var int
     */
    public $economyDiscount;

    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var int
     */
    public $firstDiscount;

    /**
     * @var string
     */
    public $flightCabins;

    /**
     * @var int
     */
    public $flightIntlRuleCode;

    /**
     * @var int
     */
    public $flightRuleCode;

    /**
     * @var hotelCitys[]
     */
    public $hotelCitys;

    /**
     * @var hotelIntlCitys[]
     */
    public $hotelIntlCitys;

    /**
     * @var int
     */
    public $hotelIntlRuleCode;

    /**
     * @var int
     */
    public $hotelRuleCode;

    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @var string
     */
    public $paymentDepartmentId;

    /**
     * @var string
     */
    public $paymentDepartmentName;

    /**
     * @var int
     */
    public $premiumEconomyDiscount;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var int
     */
    public $reserveType;

    /**
     * @var string
     */
    public $thirdPartInvoiceId;

    /**
     * @var string
     */
    public $thirdpartCostCenterId;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @var int
     */
    public $trainRuleCode;

    /**
     * @var string
     */
    public $trainSeats;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'attribute' => 'attribute',
        'businessDiscount' => 'business_discount',
        'costCenterName' => 'cost_center_name',
        'departId' => 'depart_id',
        'economyDiscount' => 'economy_discount',
        'externalUserId' => 'external_user_id',
        'firstDiscount' => 'first_discount',
        'flightCabins' => 'flight_cabins',
        'flightIntlRuleCode' => 'flight_intl_rule_code',
        'flightRuleCode' => 'flight_rule_code',
        'hotelCitys' => 'hotel_citys',
        'hotelIntlCitys' => 'hotel_intl_citys',
        'hotelIntlRuleCode' => 'hotel_intl_rule_code',
        'hotelRuleCode' => 'hotel_rule_code',
        'invoiceName' => 'invoice_name',
        'paymentDepartmentId' => 'payment_department_id',
        'paymentDepartmentName' => 'payment_department_name',
        'premiumEconomyDiscount' => 'premium_economy_discount',
        'projectCode' => 'project_code',
        'projectTitle' => 'project_title',
        'reserveType' => 'reserve_type',
        'thirdPartInvoiceId' => 'third_part_invoice_id',
        'thirdpartCostCenterId' => 'thirdpart_cost_center_id',
        'thirdpartDepartId' => 'thirdpart_depart_id',
        'trainRuleCode' => 'train_rule_code',
        'trainSeats' => 'train_seats',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (\is_array($this->hotelCitys)) {
            Model::validateArray($this->hotelCitys);
        }
        if (\is_array($this->hotelIntlCitys)) {
            Model::validateArray($this->hotelIntlCitys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }

        if (null !== $this->businessDiscount) {
            $res['business_discount'] = $this->businessDiscount;
        }

        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->economyDiscount) {
            $res['economy_discount'] = $this->economyDiscount;
        }

        if (null !== $this->externalUserId) {
            $res['external_user_id'] = $this->externalUserId;
        }

        if (null !== $this->firstDiscount) {
            $res['first_discount'] = $this->firstDiscount;
        }

        if (null !== $this->flightCabins) {
            $res['flight_cabins'] = $this->flightCabins;
        }

        if (null !== $this->flightIntlRuleCode) {
            $res['flight_intl_rule_code'] = $this->flightIntlRuleCode;
        }

        if (null !== $this->flightRuleCode) {
            $res['flight_rule_code'] = $this->flightRuleCode;
        }

        if (null !== $this->hotelCitys) {
            if (\is_array($this->hotelCitys)) {
                $res['hotel_citys'] = [];
                $n1 = 0;
                foreach ($this->hotelCitys as $item1) {
                    $res['hotel_citys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelIntlCitys) {
            if (\is_array($this->hotelIntlCitys)) {
                $res['hotel_intl_citys'] = [];
                $n1 = 0;
                foreach ($this->hotelIntlCitys as $item1) {
                    $res['hotel_intl_citys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hotelIntlRuleCode) {
            $res['hotel_intl_rule_code'] = $this->hotelIntlRuleCode;
        }

        if (null !== $this->hotelRuleCode) {
            $res['hotel_rule_code'] = $this->hotelRuleCode;
        }

        if (null !== $this->invoiceName) {
            $res['invoice_name'] = $this->invoiceName;
        }

        if (null !== $this->paymentDepartmentId) {
            $res['payment_department_id'] = $this->paymentDepartmentId;
        }

        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
        }

        if (null !== $this->premiumEconomyDiscount) {
            $res['premium_economy_discount'] = $this->premiumEconomyDiscount;
        }

        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }

        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }

        if (null !== $this->reserveType) {
            $res['reserve_type'] = $this->reserveType;
        }

        if (null !== $this->thirdPartInvoiceId) {
            $res['third_part_invoice_id'] = $this->thirdPartInvoiceId;
        }

        if (null !== $this->thirdpartCostCenterId) {
            $res['thirdpart_cost_center_id'] = $this->thirdpartCostCenterId;
        }

        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
        }

        if (null !== $this->trainRuleCode) {
            $res['train_rule_code'] = $this->trainRuleCode;
        }

        if (null !== $this->trainSeats) {
            $res['train_seats'] = $this->trainSeats;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }

        if (isset($map['business_discount'])) {
            $model->businessDiscount = $map['business_discount'];
        }

        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['economy_discount'])) {
            $model->economyDiscount = $map['economy_discount'];
        }

        if (isset($map['external_user_id'])) {
            $model->externalUserId = $map['external_user_id'];
        }

        if (isset($map['first_discount'])) {
            $model->firstDiscount = $map['first_discount'];
        }

        if (isset($map['flight_cabins'])) {
            $model->flightCabins = $map['flight_cabins'];
        }

        if (isset($map['flight_intl_rule_code'])) {
            $model->flightIntlRuleCode = $map['flight_intl_rule_code'];
        }

        if (isset($map['flight_rule_code'])) {
            $model->flightRuleCode = $map['flight_rule_code'];
        }

        if (isset($map['hotel_citys'])) {
            if (!empty($map['hotel_citys'])) {
                $model->hotelCitys = [];
                $n1 = 0;
                foreach ($map['hotel_citys'] as $item1) {
                    $model->hotelCitys[$n1] = hotelCitys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['hotel_intl_citys'])) {
            if (!empty($map['hotel_intl_citys'])) {
                $model->hotelIntlCitys = [];
                $n1 = 0;
                foreach ($map['hotel_intl_citys'] as $item1) {
                    $model->hotelIntlCitys[$n1] = hotelIntlCitys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['hotel_intl_rule_code'])) {
            $model->hotelIntlRuleCode = $map['hotel_intl_rule_code'];
        }

        if (isset($map['hotel_rule_code'])) {
            $model->hotelRuleCode = $map['hotel_rule_code'];
        }

        if (isset($map['invoice_name'])) {
            $model->invoiceName = $map['invoice_name'];
        }

        if (isset($map['payment_department_id'])) {
            $model->paymentDepartmentId = $map['payment_department_id'];
        }

        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
        }

        if (isset($map['premium_economy_discount'])) {
            $model->premiumEconomyDiscount = $map['premium_economy_discount'];
        }

        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }

        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }

        if (isset($map['reserve_type'])) {
            $model->reserveType = $map['reserve_type'];
        }

        if (isset($map['third_part_invoice_id'])) {
            $model->thirdPartInvoiceId = $map['third_part_invoice_id'];
        }

        if (isset($map['thirdpart_cost_center_id'])) {
            $model->thirdpartCostCenterId = $map['thirdpart_cost_center_id'];
        }

        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
        }

        if (isset($map['train_rule_code'])) {
            $model->trainRuleCode = $map['train_rule_code'];
        }

        if (isset($map['train_seats'])) {
            $model->trainSeats = $map['train_seats'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
