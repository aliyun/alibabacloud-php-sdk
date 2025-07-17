<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies;

use AlibabaCloud\Tea\Model;

class notifyTemplate extends Model
{
    /**
     * @description The content of the alert notification sent by email.
     *
     * @example Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert time: {{ .startTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{if .generatorURL }} \\<a href="{{.generatorURL}}" >Link\\</a> {{end}} {{end}}
     *
     * @var string
     */
    public $emailContent;

    /**
     * @description The content of the alert resolution notification sent by email.
     *
     * @example Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert resolution time: {{ .endTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{if .generatorURL }} \\<a href="{{.generatorURL}}" >Link\\</a> {{end}} {{end}}
     *
     * @var string
     */
    public $emailRecoverContent;

    /**
     * @description The title of the alert resolution notification sent by email.
     *
     * @example {{ .commonLabels.alertname }}
     *
     * @var string
     */
    public $emailRecoverTitle;

    /**
     * @description The title of the alert notification sent by email.
     *
     * @example {{ .commonLabels.alertname }}
     *
     * @var string
     */
    public $emailTitle;

    /**
     * @description The content of the alert notification sent by an IM chatbot.
     *
     * @example {{if .commonLabels.clustername }} > Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} > Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }}{{ for .alerts }}> {{.annotations.message}} {{if .generatorURL }} [Link]\\({{.generatorURL}}) {{ end }} {{if eq "true" .labels._aliyun_arms_is_denoise_filtered }} (Suspected noise) {{end}} {{end}}
     *
     * @var string
     */
    public $robotContent;

    /**
     * @description The content of the alert notification sent by text message.
     *
     * @example \\<SmsContent>Notification on the occurrence of a {{ .level }} alert. Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert time: {{ .startTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{ end }}\\</SmsContent>
     *
     * @var string
     */
    public $smsContent;

    /**
     * @description The content of the alert resolution notification sent by text message.
     *
     * @example \\<SmsRecoverContent>Alert resolution notification. Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert resolution time: {{ .endTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{ end }}\\</SmsRecoverContent>
     *
     * @var string
     */
    public $smsRecoverContent;

    /**
     * @description The content of the alert notification sent by phone.
     *
     * @example \\<TtsContent>Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert time: {{ .startTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{ end }}\\</TtsContent>
     *
     * @var string
     */
    public $ttsContent;

    /**
     * @description The content of the alert resolution notification sent by phone.
     *
     * @example \\<TtsRecoverContent>Alert name: {{ .commonLabels.alertname }}{{if .commonLabels.clustername }} Cluster name: {{ .commonLabels.clustername }} {{ end }}{{if eq "app" .commonLabels._aliyun_arms_involvedObject_kind }} Application name: {{ .commonLabels._aliyun_arms_involvedObject_name }} {{ end }} Notification policy: {{ .dispatchRuleName }} Alert resolution time: {{ .endTime }} Alert content: {{ for .alerts }} {{.annotations.message}} {{ end }}\\</TtsRecoverContent>
     *
     * @var string
     */
    public $ttsRecoverContent;
    protected $_name = [
        'emailContent' => 'EmailContent',
        'emailRecoverContent' => 'EmailRecoverContent',
        'emailRecoverTitle' => 'EmailRecoverTitle',
        'emailTitle' => 'EmailTitle',
        'robotContent' => 'RobotContent',
        'smsContent' => 'SmsContent',
        'smsRecoverContent' => 'SmsRecoverContent',
        'ttsContent' => 'TtsContent',
        'ttsRecoverContent' => 'TtsRecoverContent',
    ];

    public function validate() {}

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
