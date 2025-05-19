<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\DescribeAlarmHistoryResponseBody\alarmHistoryList\alarmHistory;

use AlibabaCloud\Dara\Model;

class contactMails extends Model
{
    /**
     * @var string[]
     */
    public $contactMail;
    protected $_name = [
        'contactMail' => 'ContactMail',
    ];

    public function validate()
    {
        if (\is_array($this->contactMail)) {
            Model::validateArray($this->contactMail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactMail) {
            if (\is_array($this->contactMail)) {
                $res['ContactMail'] = [];
                $n1 = 0;
                foreach ($this->contactMail as $item1) {
                    $res['ContactMail'][$n1++] = $item1;
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
        if (isset($map['ContactMail'])) {
            if (!empty($map['ContactMail'])) {
                $model->contactMail = [];
                $n1 = 0;
                foreach ($map['ContactMail'] as $item1) {
                    $model->contactMail[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
