<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateNotificationPolicyResponseBody\notificationPolicy;

use AlibabaCloud\Tea\Model;

class notifyTemplate extends Model
{
    /**
     * @var string
     */
    public $emailContent;

    /**
     * @var string
     */
    public $emailRecoverContent;

    /**
     * @var string
     */
    public $emailRecoverTitle;

    /**
     * @var string
     */
    public $emailTitle;

    /**
     * @var string
     */
    public $robotContent;

    /**
     * @var string
     */
    public $smsContent;

    /**
     * @var string
     */
    public $smsRecoverContent;

    /**
     * @var string
     */
    public $ttsContent;

    /**
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
