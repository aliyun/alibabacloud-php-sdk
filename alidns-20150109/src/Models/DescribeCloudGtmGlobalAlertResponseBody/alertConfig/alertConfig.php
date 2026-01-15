<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmGlobalAlertResponseBody\alertConfig;

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

    /**
     * @var int
     */
    public $threshold;
    protected $_name = [
        'dingtalkNotice' => 'DingtalkNotice',
        'emailNotice' => 'EmailNotice',
        'noticeType' => 'NoticeType',
        'smsNotice' => 'SmsNotice',
        'threshold' => 'Threshold',
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

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
