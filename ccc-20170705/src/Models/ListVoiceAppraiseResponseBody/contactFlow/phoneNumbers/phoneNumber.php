<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListVoiceAppraiseResponseBody\contactFlow\phoneNumbers;

use AlibabaCloud\Tea\Model;

class phoneNumber extends Model
{
    /**
     * @var int
     */
    public $trunks;

    /**
     * @var string
     */
    public $number;

    /**
     * @var int
     */
    public $remainingTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $phoneNumberDescription;

    /**
     * @var string
     */
    public $phoneNumberId;
    protected $_name = [
        'trunks'                 => 'Trunks',
        'number'                 => 'Number',
        'remainingTime'          => 'RemainingTime',
        'instanceId'             => 'InstanceId',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'phoneNumberId'          => 'PhoneNumberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trunks) {
            $res['Trunks'] = $this->trunks;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = $this->remainingTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Trunks'])) {
            $model->trunks = $map['Trunks'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = $map['RemainingTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
