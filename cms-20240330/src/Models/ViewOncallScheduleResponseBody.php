<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ViewOncallScheduleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ScheduleValue[][]
     */
    public $schedule;
    protected $_name = [
        'requestId' => 'requestId',
        'schedule' => 'schedule',
    ];

    public function validate()
    {
        if (\is_array($this->schedule)) {
            Model::validateArray($this->schedule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->schedule) {
            if (\is_array($this->schedule)) {
                $res['schedule'] = [];
                foreach ($this->schedule as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['schedule'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['schedule'][$key1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
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

        if (isset($map['schedule'])) {
            if (!empty($map['schedule'])) {
                $model->schedule = [];
                foreach ($map['schedule'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->schedule[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->schedule[$key1][$n2] = ScheduleValue::fromMap($item2);
                            ++$n2;
                        }
                    }
                }
            }
        }

        return $model;
    }
}
