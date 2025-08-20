<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model\remindResponses;

class model_ extends Model
{
    /**
     * @var remindResponses[]
     */
    public $remindResponses;
    protected $_name = [
        'remindResponses' => 'RemindResponses',
    ];

    public function validate()
    {
        if (\is_array($this->remindResponses)) {
            Model::validateArray($this->remindResponses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remindResponses) {
            if (\is_array($this->remindResponses)) {
                $res['RemindResponses'] = [];
                $n1 = 0;
                foreach ($this->remindResponses as $item1) {
                    $res['RemindResponses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['RemindResponses'])) {
            if (!empty($map['RemindResponses'])) {
                $model->remindResponses = [];
                $n1 = 0;
                foreach ($map['RemindResponses'] as $item1) {
                    $model->remindResponses[$n1] = remindResponses::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
