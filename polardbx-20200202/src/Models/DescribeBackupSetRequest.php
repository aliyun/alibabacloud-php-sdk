<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupSetRequest extends Model
{
    /**
     * @example 111
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @example pxc-htri0ori2r****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $destCrossRegion;

    /**
     * @example cn-hangzhou
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeBackupSetRequest
     */
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
