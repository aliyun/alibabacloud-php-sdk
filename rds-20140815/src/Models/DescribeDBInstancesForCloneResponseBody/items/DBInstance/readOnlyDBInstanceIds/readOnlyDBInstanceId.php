<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesForCloneResponseBody\items\DBInstance\readOnlyDBInstanceIds;

use AlibabaCloud\Tea\Model;

class readOnlyDBInstanceId extends Model
{
    /**
     * @description The ID of the read-only instance.
     *
     * @example rm-bpxxxxxxxxx
     *
     * @var string
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
     * @return readOnlyDBInstanceId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        return $model;
    }
}
