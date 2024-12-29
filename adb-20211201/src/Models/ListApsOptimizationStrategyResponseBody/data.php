<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListApsOptimizationStrategyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example amv-23xxxx
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example off
     *
     * @var string
     */
    public $status;

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
     * @example StrategyValue
     *
     * @var string
     */
    public $strategyType;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'status'       => 'Status',
        'strategyDesc' => 'StrategyDesc',
        'strategyName' => 'StrategyName',
        'strategyType' => 'StrategyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyDesc) {
            $res['StrategyDesc'] = $this->strategyDesc;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->strategyType) {
            $res['StrategyType'] = $this->strategyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyDesc'])) {
            $model->strategyDesc = $map['StrategyDesc'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StrategyType'])) {
            $model->strategyType = $map['StrategyType'];
        }

        return $model;
    }
}
