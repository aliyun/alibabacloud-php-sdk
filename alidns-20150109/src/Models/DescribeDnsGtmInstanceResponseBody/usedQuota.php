<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class usedQuota extends Model
{
    /**
     * @var int
     */
    public $dingtalkUsedCount;

    /**
     * @description The total number of emails that were sent.
     *
     * @example 123
     *
     * @var int
     */
    public $emailUsedCount;

    /**
     * @description The total number of short messages that were sent.
     *
     * @example 123
     *
     * @var int
     */
    public $smsUsedCount;

    /**
     * @description The number of detection tasks that were created.
     *
     * @example 123
     *
     * @var int
     */
    public $taskUsedCount;
    protected $_name = [
        'dingtalkUsedCount' => 'DingtalkUsedCount',
        'emailUsedCount' => 'EmailUsedCount',
        'smsUsedCount' => 'SmsUsedCount',
        'taskUsedCount' => 'TaskUsedCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingtalkUsedCount) {
            $res['DingtalkUsedCount'] = $this->dingtalkUsedCount;
        }
        if (null !== $this->emailUsedCount) {
            $res['EmailUsedCount'] = $this->emailUsedCount;
        }
        if (null !== $this->smsUsedCount) {
            $res['SmsUsedCount'] = $this->smsUsedCount;
        }
        if (null !== $this->taskUsedCount) {
            $res['TaskUsedCount'] = $this->taskUsedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usedQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingtalkUsedCount'])) {
            $model->dingtalkUsedCount = $map['DingtalkUsedCount'];
        }
        if (isset($map['EmailUsedCount'])) {
            $model->emailUsedCount = $map['EmailUsedCount'];
        }
        if (isset($map['SmsUsedCount'])) {
            $model->smsUsedCount = $map['SmsUsedCount'];
        }
        if (isset($map['TaskUsedCount'])) {
            $model->taskUsedCount = $map['TaskUsedCount'];
        }

        return $model;
    }
}
