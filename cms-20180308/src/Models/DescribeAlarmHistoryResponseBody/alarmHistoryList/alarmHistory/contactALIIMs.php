<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory;

use AlibabaCloud\Dara\Model;

class contactALIIMs extends Model
{
    /**
     * @var string[]
     */
    public $contactALIIM;
    protected $_name = [
        'contactALIIM' => 'ContactALIIM',
    ];

    public function validate()
    {
        if (\is_array($this->contactALIIM)) {
            Model::validateArray($this->contactALIIM);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactALIIM) {
            if (\is_array($this->contactALIIM)) {
                $res['ContactALIIM'] = [];
                $n1 = 0;
                foreach ($this->contactALIIM as $item1) {
                    $res['ContactALIIM'][$n1++] = $item1;
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
        if (isset($map['ContactALIIM'])) {
            if (!empty($map['ContactALIIM'])) {
                $model->contactALIIM = [];
                $n1 = 0;
                foreach ($map['ContactALIIM'] as $item1) {
                    $model->contactALIIM[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
