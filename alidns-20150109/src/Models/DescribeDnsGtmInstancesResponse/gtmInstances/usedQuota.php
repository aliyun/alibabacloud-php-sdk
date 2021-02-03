<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponse\gtmInstances;

use AlibabaCloud\Tea\Model;

class usedQuota extends Model
{
    /**
     * @var int
     */
    public $taskUsedCount;

    /**
     * @var int
     */
    public $smsUsedCount;

    /**
     * @var int
     */
    public $emailUsedCount;
    protected $_name = [
        'taskUsedCount'  => 'TaskUsedCount',
        'smsUsedCount'   => 'SmsUsedCount',
        'emailUsedCount' => 'EmailUsedCount',
    ];

    public function validate()
    {
        Model::validateRequired('taskUsedCount', $this->taskUsedCount, true);
        Model::validateRequired('smsUsedCount', $this->smsUsedCount, true);
        Model::validateRequired('emailUsedCount', $this->emailUsedCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskUsedCount) {
            $res['TaskUsedCount'] = $this->taskUsedCount;
        }
        if (null !== $this->smsUsedCount) {
            $res['SmsUsedCount'] = $this->smsUsedCount;
        }
        if (null !== $this->emailUsedCount) {
            $res['EmailUsedCount'] = $this->emailUsedCount;
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
        if (isset($map['TaskUsedCount'])) {
            $model->taskUsedCount = $map['TaskUsedCount'];
        }
        if (isset($map['SmsUsedCount'])) {
            $model->smsUsedCount = $map['SmsUsedCount'];
        }
        if (isset($map['EmailUsedCount'])) {
            $model->emailUsedCount = $map['EmailUsedCount'];
        }

        return $model;
    }
}
