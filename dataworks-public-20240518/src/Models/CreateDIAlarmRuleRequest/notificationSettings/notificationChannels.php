<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDIAlarmRuleRequest\notificationSettings;

use AlibabaCloud\Tea\Model;

class notificationChannels extends Model
{
    /**
     * @description The alert notification methods. Valid values:
     *
     *   Mail
     *   Phone
     *   Sms
     *   Ding
     *
     * @var string[]
     */
    public $channels;

    /**
     * @description The severity level. Valid values:
     *
     *   Warning
     *   Critical
     *
     * @example Warning
     *
     * @var string
     */
    public $severity;
    protected $_name = [
        'channels' => 'Channels',
        'severity' => 'Severity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notificationChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = $map['Channels'];
            }
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
