<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\ListXTelephonesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $authMsg;

    /**
     * @var string
     */
    public $bindTime;

    /**
     * @var string
     */
    public $buyTime;

    /**
     * @var string
     */
    public $customerPoolKey;

    /**
     * @var string
     */
    public $customerPoolName;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $smsStatus;

    /**
     * @var string
     */
    public $telephone;

    /**
     * @var string
     */
    public $telephoneStatus;

    /**
     * @var string
     */
    public $unbindTime;
    protected $_name = [
        'authMsg' => 'AuthMsg',
        'bindTime' => 'BindTime',
        'buyTime' => 'BuyTime',
        'customerPoolKey' => 'CustomerPoolKey',
        'customerPoolName' => 'CustomerPoolName',
        'releaseTime' => 'ReleaseTime',
        'smsStatus' => 'SmsStatus',
        'telephone' => 'Telephone',
        'telephoneStatus' => 'TelephoneStatus',
        'unbindTime' => 'UnbindTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authMsg) {
            $res['AuthMsg'] = $this->authMsg;
        }

        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }

        if (null !== $this->buyTime) {
            $res['BuyTime'] = $this->buyTime;
        }

        if (null !== $this->customerPoolKey) {
            $res['CustomerPoolKey'] = $this->customerPoolKey;
        }

        if (null !== $this->customerPoolName) {
            $res['CustomerPoolName'] = $this->customerPoolName;
        }

        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }

        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }

        if (null !== $this->telephone) {
            $res['Telephone'] = $this->telephone;
        }

        if (null !== $this->telephoneStatus) {
            $res['TelephoneStatus'] = $this->telephoneStatus;
        }

        if (null !== $this->unbindTime) {
            $res['UnbindTime'] = $this->unbindTime;
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
        if (isset($map['AuthMsg'])) {
            $model->authMsg = $map['AuthMsg'];
        }

        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }

        if (isset($map['BuyTime'])) {
            $model->buyTime = $map['BuyTime'];
        }

        if (isset($map['CustomerPoolKey'])) {
            $model->customerPoolKey = $map['CustomerPoolKey'];
        }

        if (isset($map['CustomerPoolName'])) {
            $model->customerPoolName = $map['CustomerPoolName'];
        }

        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }

        if (isset($map['Telephone'])) {
            $model->telephone = $map['Telephone'];
        }

        if (isset($map['TelephoneStatus'])) {
            $model->telephoneStatus = $map['TelephoneStatus'];
        }

        if (isset($map['UnbindTime'])) {
            $model->unbindTime = $map['UnbindTime'];
        }

        return $model;
    }
}
