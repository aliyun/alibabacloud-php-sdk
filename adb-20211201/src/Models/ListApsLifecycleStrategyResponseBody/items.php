<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponseBody;

use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponseBody\items\operationTables;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example aps-******
     *
     * @var string
     */
    public $apsJobId;

    /**
     * @example 2021-06-30T02:44:27Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example amv-*******
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example 2021-07-03T06:33:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description -
     *
     * @var operationTables[]
     */
    public $operationTables;

    /**
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @example 5
     *
     * @var int
     */
    public $strategyDatabases;

    /**
     * @example test
     *
     * @var string
     */
    public $strategyDesc;

    /**
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @example 5
     *
     * @var int
     */
    public $strategyTables;

    /**
     * @example KEEP_BY_TIME
     *
     * @var string
     */
    public $strategyType;

    /**
     * @example 10
     *
     * @var string
     */
    public $strategyValue;
    protected $_name = [
        'apsJobId'          => 'ApsJobId',
        'createdTime'       => 'CreatedTime',
        'DBClusterId'       => 'DBClusterId',
        'modifiedTime'      => 'ModifiedTime',
        'operationTables'   => 'OperationTables',
        'status'            => 'Status',
        'strategyDatabases' => 'StrategyDatabases',
        'strategyDesc'      => 'StrategyDesc',
        'strategyName'      => 'StrategyName',
        'strategyTables'    => 'StrategyTables',
        'strategyType'      => 'StrategyType',
        'strategyValue'     => 'StrategyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apsJobId) {
            $res['ApsJobId'] = $this->apsJobId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->operationTables) {
            $res['OperationTables'] = [];
            if (null !== $this->operationTables && \is_array($this->operationTables)) {
                $n = 0;
                foreach ($this->operationTables as $item) {
                    $res['OperationTables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyDatabases) {
            $res['StrategyDatabases'] = $this->strategyDatabases;
        }
        if (null !== $this->strategyDesc) {
            $res['StrategyDesc'] = $this->strategyDesc;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyTables) {
            $res['StrategyTables'] = $this->strategyTables;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }
        if (null !== $this->strategyValue) {
            $res['StrategyValue'] = $this->strategyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApsJobId'])) {
            $model->apsJobId = $map['ApsJobId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OperationTables'])) {
            if (!empty($map['OperationTables'])) {
                $model->operationTables = [];
                $n                      = 0;
                foreach ($map['OperationTables'] as $item) {
                    $model->operationTables[$n++] = null !== $item ? operationTables::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyDatabases'])) {
            $model->strategyDatabases = $map['StrategyDatabases'];
        }
        if (isset($map['StrategyDesc'])) {
            $model->strategyDesc = $map['StrategyDesc'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyTables'])) {
            $model->strategyTables = $map['StrategyTables'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }
        if (isset($map['StrategyValue'])) {
            $model->strategyValue = $map['StrategyValue'];
        }

        return $model;
    }
}
