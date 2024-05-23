<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20160722\Models\DescribeScalingGroupsResponseBody\scalingGroups\scalingGroup;

use AlibabaCloud\Tea\Model;

class DBInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            if (!empty($map['DBInstanceId'])) {
                $model->DBInstanceId = $map['DBInstanceId'];
            }
        }

        return $model;
    }
}
