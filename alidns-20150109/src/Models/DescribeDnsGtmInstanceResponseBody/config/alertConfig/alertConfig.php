<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config\alertConfig;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @var bool
     */
    public $smsNotice;

    /**
     * @var string
     */
    public $noticeType;

    /**
     * @var bool
     */
    public $emailNotice;
    protected $_name = [
        'smsNotice'   => 'SmsNotice',
        'noticeType'  => 'NoticeType',
        'emailNotice' => 'EmailNotice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smsNotice) {
            $res['SmsNotice'] = $this->smsNotice;
        }
        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }
        if (null !== $this->emailNotice) {
            $res['EmailNotice'] = $this->emailNotice;
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
        if (isset($map['SmsNotice'])) {
            $model->smsNotice = $map['SmsNotice'];
        }
        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }
        if (isset($map['EmailNotice'])) {
            $model->emailNotice = $map['EmailNotice'];
        }

        return $model;
    }
}
