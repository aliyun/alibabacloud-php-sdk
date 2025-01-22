<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class CloneDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $backupId;
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
