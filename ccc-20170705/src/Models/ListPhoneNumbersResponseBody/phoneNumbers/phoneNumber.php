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
    public $assignee;

    /**
     * @var string
     */
    public $phoneNumberId;

    /**
     * @var skillGroups
     */
    public $skillGroups;

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
     * @var contactFlow
     */
    public $contactFlow;

    /**
     * @var int
     */
    public $numberCommodityStatus;

    /**
     * @var privacyNumber
     */
    public $privacyNumber;

    /**
     * @var string
     */
    public $province;
    protected $_name = [
        'testOnly'               => 'TestOnly',
        'remainingTime'          => 'RemainingTime',
        'sipTelX'                => 'SipTelX',
        'city'                   => 'City',
        'instanceId'             => 'InstanceId',
        'usage'                  => 'Usage',
        'allowOutbound'          => 'AllowOutbound',
        'assignee'               => 'Assignee',
        'phoneNumberId'          => 'PhoneNumberId',
        'skillGroups'            => 'SkillGroups',
        'trunks'                 => 'Trunks',
        'number'                 => 'Number',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'contactFlow'            => 'ContactFlow',
        'numberCommodityStatus'  => 'NumberCommodityStatus',
        'privacyNumber'          => 'PrivacyNumber',
        'province'               => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->assignee) {
            $res['Assignee'] = $this->assignee;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
        }
        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = null !== $this->skillGroups ? $this->skillGroups->toMap() : null;
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
        if (null !== $this->contactFlow) {
            $res['ContactFlow'] = null !== $this->contactFlow ? $this->contactFlow->toMap() : null;
        }
        if (null !== $this->numberCommodityStatus) {
            $res['NumberCommodityStatus'] = $this->numberCommodityStatus;
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
        if (isset($map['Assignee'])) {
            $model->assignee = $map['Assignee'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }
        if (isset($map['SkillGroups'])) {
            $model->skillGroups = skillGroups::fromMap($map['SkillGroups']);
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
        if (isset($map['ContactFlow'])) {
            $model->contactFlow = contactFlow::fromMap($map['ContactFlow']);
        }
        if (isset($map['NumberCommodityStatus'])) {
            $model->numberCommodityStatus = $map['NumberCommodityStatus'];
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
