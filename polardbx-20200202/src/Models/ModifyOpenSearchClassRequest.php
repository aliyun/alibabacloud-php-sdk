<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyOpenSearchClassRequest extends Model
{
    /**
     * @var int
     */
    public $DBInstanceDiskSize;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchClassCode;
    protected $_name = [
        'DBInstanceDiskSize' => 'DBInstanceDiskSize',
        'DBInstanceName' => 'DBInstanceName',
        'regionId' => 'RegionId',
        'searchClassCode' => 'SearchClassCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceDiskSize) {
            $res['DBInstanceDiskSize'] = $this->DBInstanceDiskSize;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->searchClassCode) {
            $res['SearchClassCode'] = $this->searchClassCode;
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
        if (isset($map['DBInstanceDiskSize'])) {
            $model->DBInstanceDiskSize = $map['DBInstanceDiskSize'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SearchClassCode'])) {
            $model->searchClassCode = $map['SearchClassCode'];
        }

        return $model;
    }
}
