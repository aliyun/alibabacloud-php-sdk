<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class CreatePxfsRequest extends Model
{
    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityIPList;

    /**
     * @var int
     */
    public $storageSize;
    protected $_name = [
        'classCode' => 'ClassCode',
        'DBInstanceName' => 'DBInstanceName',
        'nodeCount' => 'NodeCount',
        'regionId' => 'RegionId',
        'securityIPList' => 'SecurityIPList',
        'storageSize' => 'StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
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
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        return $model;
    }
}
