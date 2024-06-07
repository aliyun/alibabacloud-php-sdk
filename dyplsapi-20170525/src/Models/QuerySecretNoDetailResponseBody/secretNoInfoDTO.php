<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\QuerySecretNoDetailResponseBody;

use AlibabaCloud\Tea\Model;

class secretNoInfoDTO extends Model
{
    /**
     * @description The verification status of the phone number. Valid values:
     *
     *   **0**: The phone number is not verified.
     *   **1**: The phone number is verified.
     *
     * @example 0
     *
     * @var int
     */
    public $certifyStatus;

    /**
     * @description The city.
     *
     * @example chengdu
     *
     * @var string
     */
    public $city;

    /**
     * @description The province.
     *
     * @example sichuan
     *
     * @var string
     */
    public $province;

    /**
     * @description The time when the phone number was purchased.
     *
     * @example 2021-12-03 15:19:27
     *
     * @var string
     */
    public $purchaseTime;

    /**
     * @description The status of the phone number. Valid values:
     *
     *   **0**: The phone number is not bound to other phone numbers.
     *   **1**: The phone number is bound to other phone numbers.
     *   **2**: The phone number is locked.
     *   **3**: The phone number is frozen.
     *
     * @example 0
     *
     * @var int
     */
    public $secretStatus;

    /**
     * @description The carrier to which the phone number belongs. Valid values:
     *
     *   **1**: China Mobile
     *   **2**: China Unicom
     *   **3**: China Telecom
     *
     * @example 1
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'certifyStatus' => 'CertifyStatus',
        'city'          => 'City',
        'province'      => 'Province',
        'purchaseTime'  => 'PurchaseTime',
        'secretStatus'  => 'SecretStatus',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certifyStatus) {
            $res['CertifyStatus'] = $this->certifyStatus;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }
        if (null !== $this->secretStatus) {
            $res['SecretStatus'] = $this->secretStatus;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretNoInfoDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertifyStatus'])) {
            $model->certifyStatus = $map['CertifyStatus'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }
        if (isset($map['SecretStatus'])) {
            $model->secretStatus = $map['SecretStatus'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
