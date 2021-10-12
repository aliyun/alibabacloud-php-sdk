<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Tea\Model;

class ModifyDatabaseDescriptionRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $dbDescription;
    protected $_name = [
        'regionId'       => 'RegionId',
        'DBInstanceName' => 'DBInstanceName',
        'dbName'         => 'DbName',
        'dbDescription'  => 'DbDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbDescription) {
            $res['DbDescription'] = $this->dbDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDatabaseDescriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbDescription'])) {
            $model->dbDescription = $map['DbDescription'];
        }

        return $model;
    }
}
