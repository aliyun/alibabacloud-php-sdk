<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class ModifySQLCollectorPolicyRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-xxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Specifies whether to enable or disable SQL collection.
     *
     *   Enable: enables SQL collection.
     *   Disabled: disables SQL collection.
     *
     * @example Enable
     *
     * @var string
     */
    public $SQLCollectorStatus;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'SQLCollectorStatus' => 'SQLCollectorStatus',
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
        if (null !== $this->SQLCollectorStatus) {
            $res['SQLCollectorStatus'] = $this->SQLCollectorStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySQLCollectorPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SQLCollectorStatus'])) {
            $model->SQLCollectorStatus = $map['SQLCollectorStatus'];
        }

        return $model;
    }
}
