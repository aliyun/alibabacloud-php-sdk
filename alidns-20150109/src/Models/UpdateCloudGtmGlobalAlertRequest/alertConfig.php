<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmGlobalAlertRequest;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $dingtalkNotice;

    /**
     * @example true
     *
     * @var bool
     */
    public $emailNotice;

    /**
     * @example addr_alert
     *
     * @var string
     */
    public $noticeType;

    /**
     * @example true
     *
     * @var bool
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
