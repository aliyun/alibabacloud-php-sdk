<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryResponseBody\data\configHistoryEffectDetails;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\DescribeConfigHistoryResponseBody\data\configMementos;

class data extends Model
{
    /**
     * @var configHistoryEffectDetails[]
     */
    public $configHistoryEffectDetails;

    /**
     * @var string
     */
    public $configHistoryId;

    /**
     * @var configMementos[]
     */
    public $configMementos;

    /**
     * @var string
     */
    public $effectStatus;

    /**
     * @var bool
     */
    public $effected;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $rollback;
    protected $_name = [
        'configHistoryEffectDetails' => 'ConfigHistoryEffectDetails',
        'configHistoryId' => 'ConfigHistoryId',
        'configMementos' => 'ConfigMementos',
        'effectStatus' => 'EffectStatus',
        'effected' => 'Effected',
        'gmtCreate' => 'GmtCreate',
        'operatorId' => 'OperatorId',
        'reason' => 'Reason',
        'rollback' => 'Rollback',
    ];

    public function validate()
    {
        if (\is_array($this->configHistoryEffectDetails)) {
            Model::validateArray($this->configHistoryEffectDetails);
        }
        if (\is_array($this->configMementos)) {
            Model::validateArray($this->configMementos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configHistoryEffectDetails) {
            if (\is_array($this->configHistoryEffectDetails)) {
                $res['ConfigHistoryEffectDetails'] = [];
                $n1 = 0;
                foreach ($this->configHistoryEffectDetails as $item1) {
                    $res['ConfigHistoryEffectDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->configHistoryId) {
            $res['ConfigHistoryId'] = $this->configHistoryId;
        }

        if (null !== $this->configMementos) {
            if (\is_array($this->configMementos)) {
                $res['ConfigMementos'] = [];
                $n1 = 0;
                foreach ($this->configMementos as $item1) {
                    $res['ConfigMementos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectStatus) {
            $res['EffectStatus'] = $this->effectStatus;
        }

        if (null !== $this->effected) {
            $res['Effected'] = $this->effected;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
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
        if (isset($map['ConfigHistoryEffectDetails'])) {
            if (!empty($map['ConfigHistoryEffectDetails'])) {
                $model->configHistoryEffectDetails = [];
                $n1 = 0;
                foreach ($map['ConfigHistoryEffectDetails'] as $item1) {
                    $model->configHistoryEffectDetails[$n1] = configHistoryEffectDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ConfigHistoryId'])) {
            $model->configHistoryId = $map['ConfigHistoryId'];
        }

        if (isset($map['ConfigMementos'])) {
            if (!empty($map['ConfigMementos'])) {
                $model->configMementos = [];
                $n1 = 0;
                foreach ($map['ConfigMementos'] as $item1) {
                    $model->configMementos[$n1] = configMementos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EffectStatus'])) {
            $model->effectStatus = $map['EffectStatus'];
        }

        if (isset($map['Effected'])) {
            $model->effected = $map['Effected'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }

        return $model;
    }
}
