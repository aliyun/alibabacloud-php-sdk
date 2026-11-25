<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerResponseBody\wuyingServerList;

use AlibabaCloud\Dara\Model;

class serverModelInfo extends Model
{
    /**
     * @var string
     */
    public $inferenceEngine;

    /**
     * @var string[]
     */
    public $inputModalities;

    /**
     * @var int
     */
    public $maxModelLen;

    /**
     * @var int
     */
    public $maxNumSeqs;

    /**
     * @var string
     */
    public $modelAccessMethod;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelServiceInferenceStatus;

    /**
     * @var string[]
     */
    public $outputModalities;

    /**
     * @var string
     */
    public $servedModelName;
    protected $_name = [
        'inferenceEngine' => 'InferenceEngine',
        'inputModalities' => 'InputModalities',
        'maxModelLen' => 'MaxModelLen',
        'maxNumSeqs' => 'MaxNumSeqs',
        'modelAccessMethod' => 'ModelAccessMethod',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'modelServiceInferenceStatus' => 'ModelServiceInferenceStatus',
        'outputModalities' => 'OutputModalities',
        'servedModelName' => 'ServedModelName',
    ];

    public function validate()
    {
        if (\is_array($this->inputModalities)) {
            Model::validateArray($this->inputModalities);
        }
        if (\is_array($this->outputModalities)) {
            Model::validateArray($this->outputModalities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inferenceEngine) {
            $res['InferenceEngine'] = $this->inferenceEngine;
        }

        if (null !== $this->inputModalities) {
            if (\is_array($this->inputModalities)) {
                $res['InputModalities'] = [];
                $n1 = 0;
                foreach ($this->inputModalities as $item1) {
                    $res['InputModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxModelLen) {
            $res['MaxModelLen'] = $this->maxModelLen;
        }

        if (null !== $this->maxNumSeqs) {
            $res['MaxNumSeqs'] = $this->maxNumSeqs;
        }

        if (null !== $this->modelAccessMethod) {
            $res['ModelAccessMethod'] = $this->modelAccessMethod;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelServiceInferenceStatus) {
            $res['ModelServiceInferenceStatus'] = $this->modelServiceInferenceStatus;
        }

        if (null !== $this->outputModalities) {
            if (\is_array($this->outputModalities)) {
                $res['OutputModalities'] = [];
                $n1 = 0;
                foreach ($this->outputModalities as $item1) {
                    $res['OutputModalities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->servedModelName) {
            $res['ServedModelName'] = $this->servedModelName;
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
        if (isset($map['InferenceEngine'])) {
            $model->inferenceEngine = $map['InferenceEngine'];
        }

        if (isset($map['InputModalities'])) {
            if (!empty($map['InputModalities'])) {
                $model->inputModalities = [];
                $n1 = 0;
                foreach ($map['InputModalities'] as $item1) {
                    $model->inputModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxModelLen'])) {
            $model->maxModelLen = $map['MaxModelLen'];
        }

        if (isset($map['MaxNumSeqs'])) {
            $model->maxNumSeqs = $map['MaxNumSeqs'];
        }

        if (isset($map['ModelAccessMethod'])) {
            $model->modelAccessMethod = $map['ModelAccessMethod'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelServiceInferenceStatus'])) {
            $model->modelServiceInferenceStatus = $map['ModelServiceInferenceStatus'];
        }

        if (isset($map['OutputModalities'])) {
            if (!empty($map['OutputModalities'])) {
                $model->outputModalities = [];
                $n1 = 0;
                foreach ($map['OutputModalities'] as $item1) {
                    $model->outputModalities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServedModelName'])) {
            $model->servedModelName = $map['ServedModelName'];
        }

        return $model;
    }
}
