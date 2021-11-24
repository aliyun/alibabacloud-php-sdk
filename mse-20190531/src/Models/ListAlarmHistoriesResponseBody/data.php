<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListAlarmHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alarmContent;

    /**
     * @var string
     */
    public $alarmDingDing;

    /**
     * @var string
     */
    public $alarmEmail;

    /**
     * @var string
     */
    public $alarmName;

    /**
     * @var string
     */
    public $alarmPhone;

    /**
     * @var string
     */
    public $alarmTime;
    protected $_name = [
        'alarmContent'  => 'AlarmContent',
        'alarmDingDing' => 'AlarmDingDing',
        'alarmEmail'    => 'AlarmEmail',
        'alarmName'     => 'AlarmName',
        'alarmPhone'    => 'AlarmPhone',
        'alarmTime'     => 'AlarmTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmContent) {
            $res['AlarmContent'] = $this->alarmContent;
        }
        if (null !== $this->alarmDingDing) {
            $res['AlarmDingDing'] = $this->alarmDingDing;
        }
        if (null !== $this->alarmEmail) {
            $res['AlarmEmail'] = $this->alarmEmail;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }
        if (null !== $this->alarmPhone) {
            $res['AlarmPhone'] = $this->alarmPhone;
        }
        if (null !== $this->alarmTime) {
            $res['AlarmTime'] = $this->alarmTime;
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
        if (isset($map['AlarmContent'])) {
            $model->alarmContent = $map['AlarmContent'];
        }
        if (isset($map['AlarmDingDing'])) {
            $model->alarmDingDing = $map['AlarmDingDing'];
        }
        if (isset($map['AlarmEmail'])) {
            $model->alarmEmail = $map['AlarmEmail'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }
        if (isset($map['AlarmPhone'])) {
            $model->alarmPhone = $map['AlarmPhone'];
        }
        if (isset($map['AlarmTime'])) {
            $model->alarmTime = $map['AlarmTime'];
        }

        return $model;
    }
}
