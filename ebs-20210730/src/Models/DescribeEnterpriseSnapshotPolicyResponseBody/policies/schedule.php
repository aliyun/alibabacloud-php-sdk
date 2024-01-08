<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies;

use AlibabaCloud\Tea\Model;

class schedule extends Model
{
    /**
     * @description The time when the policy will to be scheduled. Valid values: Set the parameter in a cron expression.
     *
     * For example, you can use 0 0 4 1/1 * ? to specify 04:00:00 (UTC+8) on the first day of each month.
     * @example 1 1 1 *\/1 * ?
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
