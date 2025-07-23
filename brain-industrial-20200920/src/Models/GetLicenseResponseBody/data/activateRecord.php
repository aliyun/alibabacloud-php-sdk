<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class activateRecord extends Model
{
    /**
     * @example 2024-04-29 15:03:12
     *
     * @var string
     */
    public $activateTime;

    /**
     * @example 2024-04-29 15:01:15
     *
     * @var string
     */
    public $buyTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @example 2025-05-01 00:00:00
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example XXXX
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @example 1040b91765d14ad1a40ff22589070342
     *
     * @var string
     */
    public $orderId;

    /**
     * @example activated
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return activateRecord
     */
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
