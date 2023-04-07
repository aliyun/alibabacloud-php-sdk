<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderDetailInfoResponseBody\module\occupantInfoList\costCenterInfoList;
use AlibabaCloud\Tea\Model;

class occupantInfoList extends Model
{
    /**
     * @example 1235615612424222
     *
     * @var string
     */
    public $cardNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $cardType;

    /**
     * @var costCenterInfoList[]
     */
    public $costCenterInfoList;

    /**
     * @example 1
     *
     * @var int
     */
    public $customerType;

    /**
     * @example 123112
     *
     * @var string
     */
    public $departmentId;

    /**
     * @example demo
     *
     * @var string
     */
    public $departmentName;

    /**
     * @example demo
     *
     * @var string
     */
    public $email;

    /**
     * @example 1
     *
     * @var int
     */
    public $employeeType;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $firstName;

    /**
     * @example true
     *
     * @var bool
     */
    public $isBooker;

    /**
     * @example zhang
     *
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 0571-872237
     *
     * @var string
     */
    public $phone;

    /**
     * @example true
     *
     * @var bool
     */
    public $selected;

    /**
     * @example 12817218
     *
     * @var string
     */
    public $staffNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'cardNo'             => 'card_no',
        'cardType'           => 'card_type',
        'costCenterInfoList' => 'cost_center_info_list',
        'customerType'       => 'customer_type',
        'departmentId'       => 'department_id',
        'departmentName'     => 'department_name',
        'email'              => 'email',
        'employeeType'       => 'employee_type',
        'firstName'          => 'first_name',
        'isBooker'           => 'is_booker',
        'lastName'           => 'last_name',
        'name'               => 'name',
        'phone'              => 'phone',
        'selected'           => 'selected',
        'staffNo'            => 'staff_no',
        'userType'           => 'user_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNo) {
            $res['card_no'] = $this->cardNo;
        }
        if (null !== $this->cardType) {
            $res['card_type'] = $this->cardType;
        }
        if (null !== $this->costCenterInfoList) {
            $res['cost_center_info_list'] = [];
            if (null !== $this->costCenterInfoList && \is_array($this->costCenterInfoList)) {
                $n = 0;
                foreach ($this->costCenterInfoList as $item) {
                    $res['cost_center_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customerType) {
            $res['customer_type'] = $this->customerType;
        }
        if (null !== $this->departmentId) {
            $res['department_id'] = $this->departmentId;
        }
        if (null !== $this->departmentName) {
            $res['department_name'] = $this->departmentName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->employeeType) {
            $res['employee_type'] = $this->employeeType;
        }
        if (null !== $this->firstName) {
            $res['first_name'] = $this->firstName;
        }
        if (null !== $this->isBooker) {
            $res['is_booker'] = $this->isBooker;
        }
        if (null !== $this->lastName) {
            $res['last_name'] = $this->lastName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->selected) {
            $res['selected'] = $this->selected;
        }
        if (null !== $this->staffNo) {
            $res['staff_no'] = $this->staffNo;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return occupantInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['card_no'])) {
            $model->cardNo = $map['card_no'];
        }
        if (isset($map['card_type'])) {
            $model->cardType = $map['card_type'];
        }
        if (isset($map['cost_center_info_list'])) {
            if (!empty($map['cost_center_info_list'])) {
                $model->costCenterInfoList = [];
                $n                         = 0;
                foreach ($map['cost_center_info_list'] as $item) {
                    $model->costCenterInfoList[$n++] = null !== $item ? costCenterInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['customer_type'])) {
            $model->customerType = $map['customer_type'];
        }
        if (isset($map['department_id'])) {
            $model->departmentId = $map['department_id'];
        }
        if (isset($map['department_name'])) {
            $model->departmentName = $map['department_name'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['employee_type'])) {
            $model->employeeType = $map['employee_type'];
        }
        if (isset($map['first_name'])) {
            $model->firstName = $map['first_name'];
        }
        if (isset($map['is_booker'])) {
            $model->isBooker = $map['is_booker'];
        }
        if (isset($map['last_name'])) {
            $model->lastName = $map['last_name'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['selected'])) {
            $model->selected = $map['selected'];
        }
        if (isset($map['staff_no'])) {
            $model->staffNo = $map['staff_no'];
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
