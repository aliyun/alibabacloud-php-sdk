<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class CloneDBInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1111111111
     *
     * @var string
     */
    public $backupId;

    /**
     * @description This parameter is required.
     *
     * @example gp-xxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example gp-bp***************
     *
     * @var string
     */
    public $srcDbInstanceName;
    protected $_name = [
        'backupId'          => 'BackupId',
        'DBInstanceId'      => 'DBInstanceId',
        'srcDbInstanceName' => 'SrcDbInstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupId) {
            $res['BackupId'] = $this->backupId;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->srcDbInstanceName) {
            $res['SrcDbInstanceName'] = $this->srcDbInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneDBInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupId'])) {
            $model->backupId = $map['BackupId'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['SrcDbInstanceName'])) {
            $model->srcDbInstanceName = $map['SrcDbInstanceName'];
        }

        return $model;
    }
}
