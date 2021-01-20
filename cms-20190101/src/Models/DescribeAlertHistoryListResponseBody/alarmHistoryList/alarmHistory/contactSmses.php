<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertHistoryListResponseBody\alarmHistoryList\alarmHistory;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactSms) {
            $res['ContactSms'] = $this->contactSms;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contactSmses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactSms'])) {
            if (!empty($map['ContactSms'])) {
                $model->contactSms = $map['ContactSms'];
            }
        }

        return $model;
    }
}
