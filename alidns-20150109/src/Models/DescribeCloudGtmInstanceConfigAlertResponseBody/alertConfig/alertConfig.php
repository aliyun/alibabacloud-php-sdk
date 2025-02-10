<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmInstanceConfigAlertResponseBody\alertConfig;

use AlibabaCloud\Dara\Model;

class alertConfig extends Model
{
    /**
     * @var bool
     */
    public $dingtalkNotice;
    /**
     * @var bool
     */
    public $emailNotice;
    /**
     * @var string
     */
    public $noticeType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
