<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class StartSparkSQLEngineRequest extends Model
{
    /**
     * @var string
     */
    public $config;
    /**
     * @var string
     */
    public $DBClusterId;
    /**
     * @var string
     */
    public $jars;
    /**
     * @var int
     */
    public $maxExecutor;
    /**
     * @var int
     */
    public $minExecutor;
    /**
     * @var string
     */
    public $resourceGroupName;
    /**
     * @var int
     */
    public $slotNum;
    protected $_name = [
        'config'            => 'Config',
        'DBClusterId'       => 'DBClusterId',
        'jars'              => 'Jars',
        'maxExecutor'       => 'MaxExecutor',
        'minExecutor'       => 'MinExecutor',
        'resourceGroupName' => 'ResourceGroupName',
        'slotNum'           => 'SlotNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->jars) {
            $res['Jars'] = $this->jars;
        }

        if (null !== $this->maxExecutor) {
            $res['MaxExecutor'] = $this->maxExecutor;
        }

        if (null !== $this->minExecutor) {
            $res['MinExecutor'] = $this->minExecutor;
        }

        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }

        if (null !== $this->slotNum) {
            $res['SlotNum'] = $this->slotNum;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Jars'])) {
            $model->jars = $map['Jars'];
        }

        if (isset($map['MaxExecutor'])) {
            $model->maxExecutor = $map['MaxExecutor'];
        }

        if (isset($map['MinExecutor'])) {
            $model->minExecutor = $map['MinExecutor'];
        }

        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }

        if (isset($map['SlotNum'])) {
            $model->slotNum = $map['SlotNum'];
        }

        return $model;
    }
}
