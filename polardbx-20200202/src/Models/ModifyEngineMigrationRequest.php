<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyEngineMigrationRequest extends Model
{
    /**
     * @var string
     */
    public $connectionStrings;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $newMasterDBInstanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sourceDBInstanceName;

    /**
     * @var string
     */
    public $swapConnectionString;
    protected $_name = [
        'connectionStrings' => 'ConnectionStrings',
        'DBInstanceName' => 'DBInstanceName',
        'newMasterDBInstanceName' => 'NewMasterDBInstanceName',
        'regionId' => 'RegionId',
        'sourceDBInstanceName' => 'SourceDBInstanceName',
        'swapConnectionString' => 'SwapConnectionString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStrings) {
            $res['ConnectionStrings'] = $this->connectionStrings;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->newMasterDBInstanceName) {
            $res['NewMasterDBInstanceName'] = $this->newMasterDBInstanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceDBInstanceName) {
            $res['SourceDBInstanceName'] = $this->sourceDBInstanceName;
        }

        if (null !== $this->swapConnectionString) {
            $res['SwapConnectionString'] = $this->swapConnectionString;
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
        if (isset($map['ConnectionStrings'])) {
            $model->connectionStrings = $map['ConnectionStrings'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['NewMasterDBInstanceName'])) {
            $model->newMasterDBInstanceName = $map['NewMasterDBInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceDBInstanceName'])) {
            $model->sourceDBInstanceName = $map['SourceDBInstanceName'];
        }

        if (isset($map['SwapConnectionString'])) {
            $model->swapConnectionString = $map['SwapConnectionString'];
        }

        return $model;
    }
}
