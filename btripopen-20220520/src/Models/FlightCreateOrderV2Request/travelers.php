<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightCreateOrderV2Request;

use AlibabaCloud\Tea\Model;

class travelers extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1991-01-22
     *
     * @var string
     */
    public $birthday;

    /**
     * @var string
     */
    public $certNation;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $certNo;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $certType;

    /**
     * @var string
     */
    public $certValidDate;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $costCenterNumber;

    /**
     * @var string
     */
    public $deptId;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $gender;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $nationalityCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $passengerName;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $passengerType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @description This parameter is required.
     *
     * @example 18155711459129970552412
     *
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userType;
    protected $_name = [
        'birthday'         => 'birthday',
        'certNation'       => 'cert_nation',
        'certNo'           => 'cert_no',
        'certType'         => 'cert_type',
        'certValidDate'    => 'cert_valid_date',
        'costCenterName'   => 'cost_center_name',
        'costCenterNumber' => 'cost_center_number',
        'deptId'           => 'dept_id',
        'deptName'         => 'dept_name',
        'gender'           => 'gender',
        'invoiceTitle'     => 'invoice_title',
        'nationality'      => 'nationality',
        'nationalityCode'  => 'nationality_code',
        'passengerName'    => 'passenger_name',
        'passengerType'    => 'passenger_type',
        'phone'            => 'phone',
        'projectCode'      => 'project_code',
        'projectTitle'     => 'project_title',
        'userId'           => 'user_id',
        'userType'         => 'user_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->birthday) {
            $res['birthday'] = $this->birthday;
        }
        if (null !== $this->certNation) {
            $res['cert_nation'] = $this->certNation;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->certValidDate) {
            $res['cert_valid_date'] = $this->certValidDate;
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->costCenterNumber) {
            $res['cost_center_number'] = $this->costCenterNumber;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->gender) {
            $res['gender'] = $this->gender;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }
        if (null !== $this->nationalityCode) {
            $res['nationality_code'] = $this->nationalityCode;
        }
        if (null !== $this->passengerName) {
            $res['passenger_name'] = $this->passengerName;
        }
        if (null !== $this->passengerType) {
            $res['passenger_type'] = $this->passengerType;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['user_type'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['cert_nation'])) {
            $model->certNation = $map['cert_nation'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['cert_valid_date'])) {
            $model->certValidDate = $map['cert_valid_date'];
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['cost_center_number'])) {
            $model->costCenterNumber = $map['cost_center_number'];
        }
        if (isset($map['dept_id'])) {
            $model->deptId = $map['dept_id'];
        }
        if (isset($map['dept_name'])) {
            $model->deptName = $map['dept_name'];
        }
        if (isset($map['gender'])) {
            $model->gender = $map['gender'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }
        if (isset($map['nationality_code'])) {
            $model->nationalityCode = $map['nationality_code'];
        }
        if (isset($map['passenger_name'])) {
            $model->passengerName = $map['passenger_name'];
        }
        if (isset($map['passenger_type'])) {
            $model->passengerType = $map['passenger_type'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_type'])) {
            $model->userType = $map['user_type'];
        }

        return $model;
    }
}
