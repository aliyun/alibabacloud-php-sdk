<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies;

use AlibabaCloud\Tea\Model;

class schedule extends Model
{
    /**
     * @description The cron expression of the enterprise-level snapshot policy.
     *
     * @var string
     */
    public $cronExpression;
    protected $_name = [
        'cronExpression' => 'CronExpression',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        return $model;
    }
}
