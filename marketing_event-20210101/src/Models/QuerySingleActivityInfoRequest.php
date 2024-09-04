<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class QuerySingleActivityInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @example 12233445
     *
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $QRCode;
    protected $_name = [
        'activityId'   => 'ActivityId',
        'companyName'  => 'CompanyName',
        'customerName' => 'CustomerName',
        'mobile'       => 'Mobile',
        'QRCode'       => 'QRCode',
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
        if (null !== $this->companyName) {
            $res['CompanyName'] = $this->companyName;
        }
        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->QRCode) {
            $res['QRCode'] = $this->QRCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySingleActivityInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['CompanyName'])) {
            $model->companyName = $map['CompanyName'];
        }
        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['QRCode'])) {
            $model->QRCode = $map['QRCode'];
        }

        return $model;
    }
}
