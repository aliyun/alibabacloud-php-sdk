<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSpecificationRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $cpuCores;

    /**
     * @var int
     */
    public $totalNodeNum;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'storageType'  => 'StorageType',
        'cpuCores'     => 'CpuCores',
        'totalNodeNum' => 'TotalNodeNum',
    ];

    public function validate()
    {
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('cpuCores', $this->cpuCores, true);
        Model::validateRequired('totalNodeNum', $this->totalNodeNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }
        if (null !== $this->totalNodeNum) {
            $res['TotalNodeNum'] = $this->totalNodeNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpecificationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }
        if (isset($map['TotalNodeNum'])) {
            $model->totalNodeNum = $map['TotalNodeNum'];
        }

        return $model;
    }
}
