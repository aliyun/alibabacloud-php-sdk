<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models\QueryAllActivityInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $activityId;

    /**
     * @example vip
     *
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @example test
     *
     * @var string
     */
    public $customerName;

    /**
     * @example xx@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $id;

    /**
     * @example true
     *
     * @var string
     */
    public $isVipCustomer;

    /**
     * @example 12123455
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $QRCode;

    /**
     * @example {}
     *
     * @var string
     */
    public $reportFields;
    protected $_name = [
        'activityId'    => 'ActivityId',
        'channelName'   => 'ChannelName',
        'companyName'   => 'CompanyName',
        'customerName'  => 'CustomerName',
        'email'         => 'Email',
        'id'            => 'Id',
        'isVipCustomer' => 'IsVipCustomer',
        'mobile'        => 'Mobile',
        'QRCode'        => 'QRCode',
        'reportFields'  => 'ReportFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isVipCustomer) {
            $res['IsVipCustomer'] = $this->isVipCustomer;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->QRCode) {
            $res['QRCode'] = $this->QRCode;
        }
        if (null !== $this->reportFields) {
            $res['ReportFields'] = $this->reportFields;
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
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsVipCustomer'])) {
            $model->isVipCustomer = $map['IsVipCustomer'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['QRCode'])) {
            $model->QRCode = $map['QRCode'];
        }
        if (isset($map['ReportFields'])) {
            $model->reportFields = $map['ReportFields'];
        }

        return $model;
    }
}
