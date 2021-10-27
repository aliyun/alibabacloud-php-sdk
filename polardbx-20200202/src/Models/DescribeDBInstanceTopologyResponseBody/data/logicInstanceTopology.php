<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstanceTopologyResponseBody\data\logicInstanceTopology\items;
use AlibabaCloud\Tea\Model;

class logicInstanceTopology extends Model
{
    /**
     * @var string
     */
    public $DBInstanceConnType;

    /**
     * @var string
     */
    public $DBInstanceCreateTime;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var int
     */
    public $DBInstanceStatus;

    /**
     * @var string
     */
    public $DBInstanceStatusDescription;

    /**
     * @var int
     */
    public $DBInstanceStorage;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $lockMode;

    /**
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $maintainEndTime;

    /**
     * @var string
     */
    public $maintainStartTime;
    protected $_name = [
        'DBInstanceConnType'          => 'DBInstanceConnType',
        'DBInstanceCreateTime'        => 'DBInstanceCreateTime',
        'DBInstanceDescription'       => 'DBInstanceDescription',
        'DBInstanceId'                => 'DBInstanceId',
        'DBInstanceName'              => 'DBInstanceName',
        'DBInstanceStatus'            => 'DBInstanceStatus',
        'DBInstanceStatusDescription' => 'DBInstanceStatusDescription',
        'DBInstanceStorage'           => 'DBInstanceStorage',
        'engine'                      => 'Engine',
        'engineVersion'               => 'EngineVersion',
        'items'                       => 'Items',
        'lockMode'                    => 'LockMode',
        'lockReason'                  => 'LockReason',
        'maintainEndTime'             => 'MaintainEndTime',
        'maintainStartTime'           => 'MaintainStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceConnType) {
            $res['DBInstanceConnType'] = $this->DBInstanceConnType;
        }
        if (null !== $this->DBInstanceCreateTime) {
            $res['DBInstanceCreateTime'] = $this->DBInstanceCreateTime;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBInstanceStatus) {
            $res['DBInstanceStatus'] = $this->DBInstanceStatus;
        }
        if (null !== $this->DBInstanceStatusDescription) {
            $res['DBInstanceStatusDescription'] = $this->DBInstanceStatusDescription;
        }
        if (null !== $this->DBInstanceStorage) {
            $res['DBInstanceStorage'] = $this->DBInstanceStorage;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lockMode) {
            $res['LockMode'] = $this->lockMode;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->maintainEndTime) {
            $res['MaintainEndTime'] = $this->maintainEndTime;
        }
        if (null !== $this->maintainStartTime) {
            $res['MaintainStartTime'] = $this->maintainStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logicInstanceTopology
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceConnType'])) {
            $model->DBInstanceConnType = $map['DBInstanceConnType'];
        }
        if (isset($map['DBInstanceCreateTime'])) {
            $model->DBInstanceCreateTime = $map['DBInstanceCreateTime'];
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBInstanceStatus'])) {
            $model->DBInstanceStatus = $map['DBInstanceStatus'];
        }
        if (isset($map['DBInstanceStatusDescription'])) {
            $model->DBInstanceStatusDescription = $map['DBInstanceStatusDescription'];
        }
        if (isset($map['DBInstanceStorage'])) {
            $model->DBInstanceStorage = $map['DBInstanceStorage'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LockMode'])) {
            $model->lockMode = $map['LockMode'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['MaintainEndTime'])) {
            $model->maintainEndTime = $map['MaintainEndTime'];
        }
        if (isset($map['MaintainStartTime'])) {
            $model->maintainStartTime = $map['MaintainStartTime'];
        }

        return $model;
    }
}
