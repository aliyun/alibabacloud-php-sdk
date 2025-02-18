<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupSetRequest extends Model
{
    /**
     * @var string
     */
    public $backupSetId;
    /**
     * @var string
     */
    public $DBInstanceName;
    /**
     * @var string
     */
    public $destCrossRegion;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'backupSetId'     => 'BackupSetId',
        'DBInstanceName'  => 'DBInstanceName',
        'destCrossRegion' => 'DestCrossRegion',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->destCrossRegion) {
            $res['DestCrossRegion'] = $this->destCrossRegion;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['DestCrossRegion'])) {
            $model->destCrossRegion = $map['DestCrossRegion'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
