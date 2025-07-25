<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigAlertRequest;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description Specifies whether to configure DingTalk notifications. Valid values:
     *
     *   true: configures DingTalk notifications. DingTalk notifications are sent when alerts are triggered.
     *   false: does not configure DingTalk notifications.
     *
     * @example true
     *
     * @var bool
     */
    public $dingtalkNotice;

    /**
     * @description Specifies whether to configure email notifications. Valid values:
     *
     *   true: configures email notifications. Emails are sent when alerts are triggered.
     *   false: does not configure email notifications.
     *
     * @example true
     *
     * @var bool
     */
    public $emailNotice;

    /**
     * @description The type of the alert event. Valid values:
     *
     *   addr_alert: The address is unavailable.
     *   addr_resume: The address becomes available.
     *   addr_pool_unavailable: The address pool is unavailable.
     *   addr_pool_available: The address pool becomes available.
     *
     * @example addr_alert
     *
     * @var string
     */
    public $noticeType;

    /**
     * @description Specifies whether to configure text message notifications. Valid values:
     *
     *   true: configures text message notifications. Text messages are sent when alerts are triggered.
     *   false: does not configure text message notifications.
     *
     * Only the China site (aliyun.com) supports text message notifications.
     *
     * @example true
     *
     * @var bool
     */
    public $smsNotice;
    protected $_name = [
        'dingtalkNotice' => 'DingtalkNotice',
        'emailNotice' => 'EmailNotice',
        'noticeType' => 'NoticeType',
        'smsNotice' => 'SmsNotice',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingtalkNotice) {
            $res['DingtalkNotice'] = $this->dingtalkNotice;
        }
        if (null !== $this->emailNotice) {
            $res['EmailNotice'] = $this->emailNotice;
        }
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }
        if (null !== $this->smsNotice) {
            $res['SmsNotice'] = $this->smsNotice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingtalkNotice'])) {
            $model->dingtalkNotice = $map['DingtalkNotice'];
        }
        if (isset($map['EmailNotice'])) {
            $model->emailNotice = $map['EmailNotice'];
        }
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }
        if (isset($map['SmsNotice'])) {
            $model->smsNotice = $map['SmsNotice'];
        }

        return $model;
    }
}
