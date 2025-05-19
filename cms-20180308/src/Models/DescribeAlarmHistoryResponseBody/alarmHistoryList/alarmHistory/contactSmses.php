<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory;

use AlibabaCloud\Dara\Model;

class contactSmses extends Model
{
    /**
     * @var string[]
     */
    public $contactSms;
    protected $_name = [
        'contactSms' => 'ContactSms',
    ];

    public function validate()
    {
        if (\is_array($this->contactSms)) {
            Model::validateArray($this->contactSms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactSms) {
            if (\is_array($this->contactSms)) {
                $res['ContactSms'] = [];
                $n1 = 0;
                foreach ($this->contactSms as $item1) {
                    $res['ContactSms'][$n1++] = $item1;
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
        if (isset($map['ContactSms'])) {
            if (!empty($map['ContactSms'])) {
                $model->contactSms = [];
                $n1 = 0;
                foreach ($map['ContactSms'] as $item1) {
                    $model->contactSms[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
