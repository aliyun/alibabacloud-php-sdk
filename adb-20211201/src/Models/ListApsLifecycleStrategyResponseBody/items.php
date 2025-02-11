<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ListApsLifecycleStrategyResponseBody\items\operationTables;

class items extends Model
{
    /**
     * @var string
     */
    public $apsJobId;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var operationTables[]
     */
    public $operationTables;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $strategyDatabases;
    /**
     * @var string
     */
    public $strategyDesc;
    /**
     * @var string
     */
    public $strategyName;
    /**
     * @var int
     */
    public $strategyTables;
    /**
     * @var string
     */
    public $strategyType;
    /**
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
        if (\is_array($this->operationTables)) {
            Model::validateArray($this->operationTables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->operationTables)) {
                $res['OperationTables'] = [];
                $n1                     = 0;
                foreach ($this->operationTables as $item1) {
                    $res['OperationTables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                     = 0;
                foreach ($map['OperationTables'] as $item1) {
                    $model->operationTables[$n1++] = operationTables::fromMap($item1);
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
