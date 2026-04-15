<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateScheduleConferenceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $phones;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roomCode;

    /**
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'phones' => 'phones',
        'requestId' => 'requestId',
        'roomCode' => 'roomCode',
        'scheduleConferenceId' => 'scheduleConferenceId',
        'url' => 'url',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->phones)) {
            Model::validateArray($this->phones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phones) {
            if (\is_array($this->phones)) {
                $res['phones'] = [];
                $n1 = 0;
                foreach ($this->phones as $item1) {
                    $res['phones'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->roomCode) {
            $res['roomCode'] = $this->roomCode;
        }

        if (null !== $this->scheduleConferenceId) {
            $res['scheduleConferenceId'] = $this->scheduleConferenceId;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['phones'])) {
            if (!empty($map['phones'])) {
                $model->phones = [];
                $n1 = 0;
                foreach ($map['phones'] as $item1) {
                    $model->phones[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['roomCode'])) {
            $model->roomCode = $map['roomCode'];
        }

        if (isset($map['scheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['scheduleConferenceId'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
