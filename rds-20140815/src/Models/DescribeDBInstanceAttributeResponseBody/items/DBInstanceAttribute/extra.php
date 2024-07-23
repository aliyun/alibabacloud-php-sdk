<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute\extra\DBInstanceIds;
use AlibabaCloud\Tea\Model;

class extra extends Model
{
    /**
     * @description The instance IDs.
     *
     * @var DBInstanceIds
     */
    public $DBInstanceIds;

    /**
     * @description The recovery model. Valid values: Simple and Full.
     *
     * @example Simple
     *
     * @var string
     */
    public $recoveryModel;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
        'recoveryModel' => 'RecoveryModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toMap() : null;
        }
        if (null !== $this->recoveryModel) {
            $res['RecoveryModel'] = $this->recoveryModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extra
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = DBInstanceIds::fromMap($map['DBInstanceIds']);
        }
        if (isset($map['RecoveryModel'])) {
            $model->recoveryModel = $map['RecoveryModel'];
        }

        return $model;
    }
}
