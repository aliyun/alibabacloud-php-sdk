<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class usedQuota extends Model
{
    /**
     * @var int
     */
    public $emailUsedCount;

    /**
     * @var int
     */
    public $taskUsedCount;

    /**
     * @var int
     */
    public $smsUsedCount;
    protected $_name = [
        'emailUsedCount' => 'EmailUsedCount',
        'taskUsedCount'  => 'TaskUsedCount',
        'smsUsedCount'   => 'SmsUsedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emailUsedCount) {
            $res['EmailUsedCount'] = $this->emailUsedCount;
        }
        if (null !== $this->taskUsedCount) {
            $res['TaskUsedCount'] = $this->taskUsedCount;
        }
        if (null !== $this->smsUsedCount) {
            $res['SmsUsedCount'] = $this->smsUsedCount;
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
        if (isset($map['EmailUsedCount'])) {
            $model->emailUsedCount = $map['EmailUsedCount'];
        }
        if (isset($map['TaskUsedCount'])) {
            $model->taskUsedCount = $map['TaskUsedCount'];
        }
        if (isset($map['SmsUsedCount'])) {
            $model->smsUsedCount = $map['SmsUsedCount'];
        }

        return $model;
    }
}
