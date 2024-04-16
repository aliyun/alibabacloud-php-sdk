<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody;

use AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model\remindResponses;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindResponses) {
            $res['RemindResponses'] = [];
            if (null !== $this->remindResponses && \is_array($this->remindResponses)) {
                $n = 0;
                foreach ($this->remindResponses as $item) {
                    $res['RemindResponses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindResponses'])) {
            if (!empty($map['RemindResponses'])) {
                $model->remindResponses = [];
                $n                      = 0;
                foreach ($map['RemindResponses'] as $item) {
                    $model->remindResponses[$n++] = null !== $item ? remindResponses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
