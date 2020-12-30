<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody\outboundPhoneNumbers;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListOutboundPhoneNumberOfUserResponseBody\outboundPhoneNumbers\phoneNumber\privacyNumber;
use AlibabaCloud\Tea\Model;

class phoneNumber extends Model
{
    /**
     * @var bool
     */
    public $privateFlag;

    /**
     * @var bool
     */
    public $testOnly;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $sipTelX;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var bool
     */
    public $allowOutbound;

    /**
     * @var string
     */
    public $phoneNumberId;

    /**
     * @var int
     */
    public $trunks;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $phoneNumberDescription;

    /**
     * @var privacyNumber
     */
    public $privacyNumber;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'privateFlag'            => 'PrivateFlag',
        'testOnly'               => 'TestOnly',
        'remainingTime'          => 'RemainingTime',
        'sipTelX'                => 'SipTelX',
        'city'                   => 'City',
        'instanceId'             => 'InstanceId',
        'usage'                  => 'Usage',
        'allowOutbound'          => 'AllowOutbound',
        'phoneNumberId'          => 'PhoneNumberId',
        'trunks'                 => 'Trunks',
        'number'                 => 'Number',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'privacyNumber'          => 'PrivacyNumber',
        'province'               => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateFlag) {
            $res['PrivateFlag'] = $this->privateFlag;
        }
        if (null !== $this->testOnly) {
            $res['TestOnly'] = $this->testOnly;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->sipTelX) {
            $res['SipTelX'] = $this->sipTelX;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->allowOutbound) {
            $res['AllowOutbound'] = $this->allowOutbound;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
        }
        if (null !== $this->trunks) {
            $res['Trunks'] = $this->trunks;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->phoneNumberDescription) {
            $res['PhoneNumberDescription'] = $this->phoneNumberDescription;
        }
        if (null !== $this->privacyNumber) {
            $res['PrivacyNumber'] = null !== $this->privacyNumber ? $this->privacyNumber->toMap() : null;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phoneNumber
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateFlag'])) {
            $model->privateFlag = $map['PrivateFlag'];
        }
        if (isset($map['TestOnly'])) {
            $model->testOnly = $map['TestOnly'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['SipTelX'])) {
            $model->sipTelX = $map['SipTelX'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['AllowOutbound'])) {
            $model->allowOutbound = $map['AllowOutbound'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }
        if (isset($map['Trunks'])) {
            $model->trunks = $map['Trunks'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['PhoneNumberDescription'])) {
            $model->phoneNumberDescription = $map['PhoneNumberDescription'];
        }
        if (isset($map['PrivacyNumber'])) {
            $model->privacyNumber = privacyNumber::fromMap($map['PrivacyNumber']);
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
