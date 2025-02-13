<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMeetingRoomsScheduleResponseBody\scheduleInformation;

class GetMeetingRoomsScheduleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scheduleInformation[]
     */
    public $scheduleInformation;
    protected $_name = [
        'requestId'           => 'requestId',
        'scheduleInformation' => 'scheduleInformation',
    ];

    public function validate()
    {
        if (\is_array($this->scheduleInformation)) {
            Model::validateArray($this->scheduleInformation);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scheduleInformation) {
            if (\is_array($this->scheduleInformation)) {
                $res['scheduleInformation'] = [];
                $n1                         = 0;
                foreach ($this->scheduleInformation as $item1) {
                    $res['scheduleInformation'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scheduleInformation'])) {
            if (!empty($map['scheduleInformation'])) {
                $model->scheduleInformation = [];
                $n1                         = 0;
                foreach ($map['scheduleInformation'] as $item1) {
                    $model->scheduleInformation[$n1++] = scheduleInformation::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
