<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\FlowBindPhoneRequest;

use AlibabaCloud\Dara\Model;

class multiWabaPhoneNumbers extends Model
{
    /**
     * @var string
     */
    public $channelCode;

    /**
     * @var string[]
     */
    public $phoneNumbers;

    /**
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'channelCode' => 'ChannelCode',
        'phoneNumbers' => 'PhoneNumbers',
        'wabaId' => 'WabaId',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNumbers)) {
            Model::validateArray($this->phoneNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelCode) {
            $res['ChannelCode'] = $this->channelCode;
        }

        if (null !== $this->phoneNumbers) {
            if (\is_array($this->phoneNumbers)) {
                $res['PhoneNumbers'] = [];
                $n1 = 0;
                foreach ($this->phoneNumbers as $item1) {
                    $res['PhoneNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
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
        if (isset($map['ChannelCode'])) {
            $model->channelCode = $map['ChannelCode'];
        }

        if (isset($map['PhoneNumbers'])) {
            if (!empty($map['PhoneNumbers'])) {
                $model->phoneNumbers = [];
                $n1 = 0;
                foreach ($map['PhoneNumbers'] as $item1) {
                    $model->phoneNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
