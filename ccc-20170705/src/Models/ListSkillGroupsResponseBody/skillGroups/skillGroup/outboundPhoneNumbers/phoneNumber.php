<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupsResponseBody\skillGroups\skillGroup\outboundPhoneNumbers;

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
    public $trunks;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $number;

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
    public $phoneNumberDescription;

    /**
     * @var string
     */
    public $phoneNumberId;
    protected $_name = [
        'testOnly'               => 'TestOnly',
        'trunks'                 => 'Trunks',
        'remainingTime'          => 'RemainingTime',
        'number'                 => 'Number',
        'instanceId'             => 'InstanceId',
        'usage'                  => 'Usage',
        'allowOutbound'          => 'AllowOutbound',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'phoneNumberId'          => 'PhoneNumberId',
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
        if (null !== $this->trunks) {
            $res['Trunks'] = $this->trunks;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
        if (null !== $this->phoneNumberDescription) {
            $res['PhoneNumberDescription'] = $this->phoneNumberDescription;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
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
        if (isset($map['Trunks'])) {
            $model->trunks = $map['Trunks'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
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
        if (isset($map['PhoneNumberDescription'])) {
            $model->phoneNumberDescription = $map['PhoneNumberDescription'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }

        return $model;
    }
}
