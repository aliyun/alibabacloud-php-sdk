<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam;

class AgentInfo extends Model
{
    /**
     * @var string
     */
    public $agentDescription;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $inputType;

    /**
     * @var string
     */
    public $instructionType;

    /**
     * @var instructionTypeParam
     */
    public $instructionTypeParam;

    /**
     * @var string
     */
    public $modelType;
    protected $_name = [
        'agentDescription' => 'AgentDescription',
        'agentName' => 'AgentName',
        'id' => 'Id',
        'inputType' => 'InputType',
        'instructionType' => 'InstructionType',
        'instructionTypeParam' => 'InstructionTypeParam',
        'modelType' => 'ModelType',
    ];

    public function validate()
    {
        if (null !== $this->instructionTypeParam) {
            $this->instructionTypeParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDescription) {
            $res['AgentDescription'] = $this->agentDescription;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->inputType) {
            $res['InputType'] = $this->inputType;
        }

        if (null !== $this->instructionType) {
            $res['InstructionType'] = $this->instructionType;
        }

        if (null !== $this->instructionTypeParam) {
            $res['InstructionTypeParam'] = null !== $this->instructionTypeParam ? $this->instructionTypeParam->toArray($noStream) : $this->instructionTypeParam;
        }

        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
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
        if (isset($map['AgentDescription'])) {
            $model->agentDescription = $map['AgentDescription'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InputType'])) {
            $model->inputType = $map['InputType'];
        }

        if (isset($map['InstructionType'])) {
            $model->instructionType = $map['InstructionType'];
        }

        if (isset($map['InstructionTypeParam'])) {
            $model->instructionTypeParam = instructionTypeParam::fromMap($map['InstructionTypeParam']);
        }

        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        return $model;
    }
}
