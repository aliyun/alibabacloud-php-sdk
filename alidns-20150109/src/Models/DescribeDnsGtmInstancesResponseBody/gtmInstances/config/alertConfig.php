<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\config;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @var string
     */
    public $dingtalkNotice;

    /**
     * @description Indicates whether email notifications were configured. Valid values:
     *
     *   true: configured
     *   false | null: not configured
     *
     * @example true
     *
     * @var string
     */
    public $emailNotice;

    /**
     * @description The type of the alert event. Valid values:
     *
     *   ADDR_ALERT: The address is unavailable.
     *   ADDR_RESUME: The address is restored and becomes available.
     *   ADDR_POOL_GROUP_UNAVAILABLE: The address pool group is unavailable.
     *   ADDR_POOL_GROUP_AVAILABLE: The address pool group is restored and becomes available.
     *   ACCESS_STRATEGY_POOL_GROUP_SWITCH: Switchover is triggered between the primary and secondary address pools.
     *
     * @example ADDR_ALERT
     *
     * @var string
     */
    public $noticeType;

    /**
     * @description Indicates whether SMS notifications were configured. Valid values:
     *
     *   true: configured
     *   false | null: not configured
     *
     * @example true
     *
     * @var string
     */
    public $smsNotice;
    protected $_name = [
        'dingtalkNotice' => 'DingtalkNotice',
        'emailNotice'    => 'EmailNotice',
        'noticeType'     => 'NoticeType',
        'smsNotice'      => 'SmsNotice',
    ];

    public function validate()
    {
    }

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
