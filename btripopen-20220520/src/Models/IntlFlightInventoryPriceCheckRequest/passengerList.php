<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest\passengerList\certInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest\passengerList\subsidiaryCertInfoList;
use AlibabaCloud\Tea\Model;

class passengerList extends Model
{
    /**
     * @example 2020-01-01
     *
     * @var string
     */
    public $birthday;

    /**
     * @example 100/1001
     *
     * @var string
     */
    public $cascadeDeptMask;

    /**
     * @var string
     */
    public $cascadeDeptName;

    /**
     * @var certInfo
     */
    public $certInfo;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @example 100231
     *
     * @var string
     */
    public $costCenterNumber;

    /**
     * @example 1001
     *
     * @var string
     */
    public $deptId;

    /**
     * @var string
     */
    public $deptName;

    /**
     * @example 0
     *
     * @var int
     */
    public $gender;

    /**
     * @example 10001313
     *
     * @var string
     */
    public $invoiceId;

    /**
     * @var string
     */
    public $invoiceTitle;

    /**
     * @example L5000924
     *
     * @var string
     */
    public $jobNo;

    /**
     * @example 086
     *
     * @var string
     */
    public $mobileCountryCode;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @example CN
     *
     * @var string
     */
    public $nationalityCode;

    /**
     * @example 0
     *
     * @var int
     */
    public $passengerType;

    /**
     * @example 18012341234
     *
     * @var string
     */
    public $phone;

    /**
     * @example 10123143
     *
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var subsidiaryCertInfoList[]
     */
    public $subsidiaryCertInfoList;

    /**
     * @example 10001
     *
     * @var string
     */
    public $userId;

    /**
     * @example 0
     *
     * @var int
     */
    public $userType;
    protected $_name = [
        'birthday'               => 'birthday',
        'cascadeDeptMask'        => 'cascade_dept_mask',
        'cascadeDeptName'        => 'cascade_dept_name',
        'certInfo'               => 'cert_info',
        'costCenterName'         => 'cost_center_name',
        'costCenterNumber'       => 'cost_center_number',
        'deptId'                 => 'dept_id',
        'deptName'               => 'dept_name',
        'gender'                 => 'gender',
        'invoiceId'              => 'invoice_id',
        'invoiceTitle'           => 'invoice_title',
        'jobNo'                  => 'job_no',
        'mobileCountryCode'      => 'mobile_country_code',
        'nationality'            => 'nationality',
        'nationalityCode'        => 'nationality_code',
        'passengerType'          => 'passenger_type',
        'phone'                  => 'phone',
        'projectCode'            => 'project_code',
        'projectTitle'           => 'project_title',
        'subsidiaryCertInfoList' => 'subsidiary_cert_info_list',
        'userId'                 => 'user_id',
        'userType'               => 'user_type',
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
        if (null !== $this->cascadeDeptMask) {
            $res['cascade_dept_mask'] = $this->cascadeDeptMask;
        }
        if (null !== $this->cascadeDeptName) {
            $res['cascade_dept_name'] = $this->cascadeDeptName;
        }
        if (null !== $this->certInfo) {
            $res['cert_info'] = null !== $this->certInfo ? $this->certInfo->toMap() : null;
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
        if (null !== $this->invoiceId) {
            $res['invoice_id'] = $this->invoiceId;
        }
        if (null !== $this->invoiceTitle) {
            $res['invoice_title'] = $this->invoiceTitle;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->mobileCountryCode) {
            $res['mobile_country_code'] = $this->mobileCountryCode;
        }
        if (null !== $this->nationality) {
            $res['nationality'] = $this->nationality;
        }
        if (null !== $this->nationalityCode) {
            $res['nationality_code'] = $this->nationalityCode;
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
        if (null !== $this->subsidiaryCertInfoList) {
            $res['subsidiary_cert_info_list'] = [];
            if (null !== $this->subsidiaryCertInfoList && \is_array($this->subsidiaryCertInfoList)) {
                $n = 0;
                foreach ($this->subsidiaryCertInfoList as $item) {
                    $res['subsidiary_cert_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return passengerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['birthday'])) {
            $model->birthday = $map['birthday'];
        }
        if (isset($map['cascade_dept_mask'])) {
            $model->cascadeDeptMask = $map['cascade_dept_mask'];
        }
        if (isset($map['cascade_dept_name'])) {
            $model->cascadeDeptName = $map['cascade_dept_name'];
        }
        if (isset($map['cert_info'])) {
            $model->certInfo = certInfo::fromMap($map['cert_info']);
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
        if (isset($map['invoice_id'])) {
            $model->invoiceId = $map['invoice_id'];
        }
        if (isset($map['invoice_title'])) {
            $model->invoiceTitle = $map['invoice_title'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['mobile_country_code'])) {
            $model->mobileCountryCode = $map['mobile_country_code'];
        }
        if (isset($map['nationality'])) {
            $model->nationality = $map['nationality'];
        }
        if (isset($map['nationality_code'])) {
            $model->nationalityCode = $map['nationality_code'];
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
        if (isset($map['subsidiary_cert_info_list'])) {
            if (!empty($map['subsidiary_cert_info_list'])) {
                $model->subsidiaryCertInfoList = [];
                $n                             = 0;
                foreach ($map['subsidiary_cert_info_list'] as $item) {
                    $model->subsidiaryCertInfoList[$n++] = null !== $item ? subsidiaryCertInfoList::fromMap($item) : $item;
                }
            }
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
