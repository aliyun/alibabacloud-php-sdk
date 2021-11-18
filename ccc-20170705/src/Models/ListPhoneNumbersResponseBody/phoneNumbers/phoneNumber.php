<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers\phoneNumber\contactFlow;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers\phoneNumber\privacyNumber;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneNumbersResponseBody\phoneNumbers\phoneNumber\skillGroups;
use AlibabaCloud\Tea\Model;

class phoneNumber extends Model
{
    /**
     * @var bool
     */
    public $allowOutbound;

    /**
     * @var string
     */
    public $assignee;

    /**
     * @var string
     */
    public $city;

    /**
     * @var contactFlow
     */
    public $contactFlow;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $numberCommodityStatus;

    /**
     * @var string
     */
    public $phoneNumberDescription;

    /**
     * @var string
     */
    public $phoneNumberId;

    /**
     * @var privacyNumber
     */
    public $privacyNumber;

    /**
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $sipTelX;

    /**
     * @var skillGroups
     */
    public $skillGroups;

    /**
     * @var bool
     */
    public $testOnly;

    /**
     * @var int
     */
    public $trunks;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'allowOutbound'          => 'AllowOutbound',
        'assignee'               => 'Assignee',
        'city'                   => 'City',
        'contactFlow'            => 'ContactFlow',
        'instanceId'             => 'InstanceId',
        'number'                 => 'Number',
        'numberCommodityStatus'  => 'NumberCommodityStatus',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'phoneNumberId'          => 'PhoneNumberId',
        'privacyNumber'          => 'PrivacyNumber',
        'province'               => 'Province',
        'remainingTime'          => 'RemainingTime',
        'sipTelX'                => 'SipTelX',
        'skillGroups'            => 'SkillGroups',
        'testOnly'               => 'TestOnly',
        'trunks'                 => 'Trunks',
        'usage'                  => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowOutbound) {
            $res['AllowOutbound'] = $this->allowOutbound;
        }
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->contactFlow) {
            $res['ContactFlow'] = null !== $this->contactFlow ? $this->contactFlow->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->numberCommodityStatus) {
            $res['NumberCommodityStatus'] = $this->numberCommodityStatus;
        }
        if (null !== $this->phoneNumberDescription) {
            $res['PhoneNumberDescription'] = $this->phoneNumberDescription;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
        }
        if (null !== $this->privacyNumber) {
            $res['PrivacyNumber'] = null !== $this->privacyNumber ? $this->privacyNumber->toMap() : null;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->sipTelX) {
            $res['SipTelX'] = $this->sipTelX;
        }
        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = null !== $this->skillGroups ? $this->skillGroups->toMap() : null;
        }
        if (null !== $this->testOnly) {
            $res['TestOnly'] = $this->testOnly;
        }
        if (null !== $this->trunks) {
            $res['Trunks'] = $this->trunks;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['AllowOutbound'])) {
            $model->allowOutbound = $map['AllowOutbound'];
        }
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['ContactFlow'])) {
            $model->contactFlow = contactFlow::fromMap($map['ContactFlow']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['NumberCommodityStatus'])) {
            $model->numberCommodityStatus = $map['NumberCommodityStatus'];
        }
        if (isset($map['PhoneNumberDescription'])) {
            $model->phoneNumberDescription = $map['PhoneNumberDescription'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }
        if (isset($map['PrivacyNumber'])) {
            $model->privacyNumber = privacyNumber::fromMap($map['PrivacyNumber']);
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['SipTelX'])) {
            $model->sipTelX = $map['SipTelX'];
        }
        if (isset($map['SkillGroups'])) {
            $model->skillGroups = skillGroups::fromMap($map['SkillGroups']);
        }
        if (isset($map['TestOnly'])) {
            $model->testOnly = $map['TestOnly'];
        }
        if (isset($map['Trunks'])) {
            $model->trunks = $map['Trunks'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
