<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmTime;

    /**
     * @var string
     */
    public $alarmEmail;

    /**
     * @var string
     */
    public $alarmDingDing;

    /**
     * @var string
     */
    public $alarmPhone;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $alarmContent;
    protected $_name = [
        'alarmTime'     => 'AlarmTime',
        'alarmEmail'    => 'AlarmEmail',
        'alarmDingDing' => 'AlarmDingDing',
        'alarmPhone'    => 'AlarmPhone',
        'alarmName'     => 'AlarmName',
        'alarmContent'  => 'AlarmContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
        }
        if (null !== $this->alarmEmail) {
            $res['AlarmEmail'] = $this->alarmEmail;
        }
        if (null !== $this->alarmDingDing) {
            $res['AlarmDingDing'] = $this->alarmDingDing;
        }
        if (null !== $this->alarmPhone) {
            $res['AlarmPhone'] = $this->alarmPhone;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }
        if (isset($map['AlarmEmail'])) {
            $model->alarmEmail = $map['AlarmEmail'];
        }
        if (isset($map['AlarmDingDing'])) {
            $model->alarmDingDing = $map['AlarmDingDing'];
        }
        if (isset($map['AlarmPhone'])) {
            $model->alarmPhone = $map['AlarmPhone'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }

        return $model;
    }
}
