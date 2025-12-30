<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models;

use AlibabaCloud\Dara\Model;

class ChatBIConfigUpdateEntryRequest extends Model
{
    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $formulaFunction;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $isFunctional;

    /**
     * @var string
     */
    public $queryFunction;

    /**
     * @var string
     */
    public $sqlCondition;

    /**
     * @var string
     */
    public $sqlFunction;

    /**
     * @var string
     */
    public $textCondition;
    protected $_name = [
        'dbName' => 'DbName',
        'formulaFunction' => 'FormulaFunction',
        'id' => 'Id',
        'instanceName' => 'InstanceName',
        'isFunctional' => 'IsFunctional',
        'queryFunction' => 'QueryFunction',
        'sqlCondition' => 'SqlCondition',
        'sqlFunction' => 'SqlFunction',
        'textCondition' => 'TextCondition',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }

        if (null !== $this->formulaFunction) {
            $res['FormulaFunction'] = $this->formulaFunction;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->isFunctional) {
            $res['IsFunctional'] = $this->isFunctional;
        }

        if (null !== $this->queryFunction) {
            $res['QueryFunction'] = $this->queryFunction;
        }

        if (null !== $this->sqlCondition) {
            $res['SqlCondition'] = $this->sqlCondition;
        }

        if (null !== $this->sqlFunction) {
            $res['SqlFunction'] = $this->sqlFunction;
        }

        if (null !== $this->textCondition) {
            $res['TextCondition'] = $this->textCondition;
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
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }

        if (isset($map['FormulaFunction'])) {
            $model->formulaFunction = $map['FormulaFunction'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['IsFunctional'])) {
            $model->isFunctional = $map['IsFunctional'];
        }

        if (isset($map['QueryFunction'])) {
            $model->queryFunction = $map['QueryFunction'];
        }

        if (isset($map['SqlCondition'])) {
            $model->sqlCondition = $map['SqlCondition'];
        }

        if (isset($map['SqlFunction'])) {
            $model->sqlFunction = $map['SqlFunction'];
        }

        if (isset($map['TextCondition'])) {
            $model->textCondition = $map['TextCondition'];
        }

        return $model;
    }
}
