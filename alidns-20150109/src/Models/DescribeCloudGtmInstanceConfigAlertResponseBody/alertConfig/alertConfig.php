<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody\alertConfig;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @description Indicates whether DingTalk notifications are configured. Valid values:
     *
     *   true: DingTalk notifications are configured. DingTalk notifications are sent after alerts are triggered.
     *   false: DingTalk notifications are not configured.
     *
     * @example true
     *
     * @var bool
     */
    public $dingtalkNotice;

    /**
     * @description Indicates whether email notifications are configured. Valid values:
     *
     *   true: Email notifications are configured. Emails are sent after alerts are triggered.
     *   false: Email notifications are not configured.
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
     * @description Indicates whether text message notifications are configured. Valid values:
     *
     *   true: Text message notifications are configured. Text messages are sent after alerts are triggered.
     *   false: Text message notifications are not configured.
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
