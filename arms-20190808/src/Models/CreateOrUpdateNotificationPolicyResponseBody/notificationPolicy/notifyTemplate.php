<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;

use AlibabaCloud\Tea\Model;

class notifyTemplate extends Model
{
    /**
     * @description The content of the alert notification sent through email.
     *
     * @example Alert Name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }}
     * {{ end }} {{ end }}
     * @var string
     */
    public $emailContent;

    /**
     * @description The content of the alert resolution notification sent through email.
     *
     * @example Alert Name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }}
     * {{ end }} {{ end }}
     * @var string
     */
    public $emailRecoverContent;

    /**
     * @description The title of the alert resolution notification sent through email.
     *
     * @example {{ .commonLabels.alertname }}
     *
     * @var string
     */
    public $emailRecoverTitle;

    /**
     * @description The title of the alert notification sent through email.
     *
     * @example {{ .commonLabels.alertname }}
     *
     * @var string
     */
    public $emailTitle;

    /**
     * @description The content of the alert notification sent by the IM robot.
     *
     * @example {{if .commonLabels.clustername }}
     *
     * {{end}}
     * @var string
     */
    public $robotContent;

    /**
     * @description The content of the alert notification sent through text message.
     *
     * @example {{ .level }}Alert Occurs
     * Description: {{ for .alerts }} {{ .annotations.message }} {{ end }}
     * @var string
     */
    public $smsContent;

    /**
     * @description The content of the alert resolution notification sent through text message.
     *
     * @example Alert Recovery Notification
     * Description: {{ for .alerts }} {{ .annotations.message }} {{ end }}
     * @var string
     */
    public $smsRecoverContent;

    /**
     * @description The content of the alert notification by phone.
     *
     * @example Alert Name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }}
     * Description: {{ for .alerts }} {{ .annotations.message }} {{ end }}
     * @var string
     */
    public $ttsContent;

    /**
     * @description The content of the alert resolution notification by phone.
     *
     * @example Alert Name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }}
     * Description: {{ for .alerts }} {{ .annotations.message }} {{ end }}
     * @var string
     */
    public $ttsRecoverContent;
    protected $_name = [
        'emailContent'        => 'EmailContent',
        'emailRecoverContent' => 'EmailRecoverContent',
        'emailRecoverTitle'   => 'EmailRecoverTitle',
        'emailTitle'          => 'EmailTitle',
        'robotContent'        => 'RobotContent',
        'smsContent'          => 'SmsContent',
        'smsRecoverContent'   => 'SmsRecoverContent',
        'ttsContent'          => 'TtsContent',
        'ttsRecoverContent'   => 'TtsRecoverContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emailContent) {
            $res['EmailContent'] = $this->emailContent;
        }
        if (null !== $this->emailRecoverContent) {
            $res['EmailRecoverContent'] = $this->emailRecoverContent;
        }
        if (null !== $this->emailRecoverTitle) {
            $res['EmailRecoverTitle'] = $this->emailRecoverTitle;
        }
        if (null !== $this->emailTitle) {
            $res['EmailTitle'] = $this->emailTitle;
        }
        if (null !== $this->robotContent) {
            $res['RobotContent'] = $this->robotContent;
        }
        if (null !== $this->smsContent) {
            $res['SmsContent'] = $this->smsContent;
        }
        if (null !== $this->smsRecoverContent) {
            $res['SmsRecoverContent'] = $this->smsRecoverContent;
        }
        if (null !== $this->ttsContent) {
            $res['TtsContent'] = $this->ttsContent;
        }
        if (null !== $this->ttsRecoverContent) {
            $res['TtsRecoverContent'] = $this->ttsRecoverContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notifyTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmailContent'])) {
            $model->emailContent = $map['EmailContent'];
        }
        if (isset($map['EmailRecoverContent'])) {
            $model->emailRecoverContent = $map['EmailRecoverContent'];
        }
        if (isset($map['EmailRecoverTitle'])) {
            $model->emailRecoverTitle = $map['EmailRecoverTitle'];
        }
        if (isset($map['EmailTitle'])) {
            $model->emailTitle = $map['EmailTitle'];
        }
        if (isset($map['RobotContent'])) {
            $model->robotContent = $map['RobotContent'];
        }
        if (isset($map['SmsContent'])) {
            $model->smsContent = $map['SmsContent'];
        }
        if (isset($map['SmsRecoverContent'])) {
            $model->smsRecoverContent = $map['SmsRecoverContent'];
        }
        if (isset($map['TtsContent'])) {
            $model->ttsContent = $map['TtsContent'];
        }
        if (isset($map['TtsRecoverContent'])) {
            $model->ttsRecoverContent = $map['TtsRecoverContent'];
        }

        return $model;
    }
}
