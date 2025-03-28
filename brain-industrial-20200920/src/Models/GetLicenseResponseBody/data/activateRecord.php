<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseResponseBody\data;

use AlibabaCloud\Dara\Model;

class activateRecord extends Model
{
    /**
     * @var string
     */
    public $activateTime;

    /**
     * @var string
     */
    public $buyTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $licenseCode;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'activateTime' => 'ActivateTime',
        'buyTime' => 'BuyTime',
        'duration' => 'Duration',
        'expireTime' => 'ExpireTime',
        'licenseCode' => 'LicenseCode',
        'orderId' => 'OrderId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }

        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }

        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
