<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody\nodeInstanceTypeModels;

use AlibabaCloud\Dara\Model;

class wuyingServerModelMetaInfo extends Model
{
    /**
     * @var string
     */
    public $defaultInferenceEngine;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $firstTokenLatencySeconds;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $inputModalities;

    /**
     * @var int
     */
    public $machineInputTokensPerSecond;

    /**
     * @var int
     */
    public $machineOutputTokensPerSecond;

    /**
     * @var int
     */
    public $maxModelLen;

    /**
     * @var int
     */
    public $maxModelLenMax;

    /**
     * @var int
     */
    public $maxModelLenMin;

    /**
     * @var int
     */
    public $maxNumSeqsMax;

    /**
     * @var int
     */
    public $maxNumSeqsMin;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string[]
     */
    public $outputModalities;

    /**
     * @var bool
     */
    public $recommended;

    /**
     * @var int
     */
    public $recommendedMaxNumSeqs;
    protected $_name = [
        'defaultInferenceEngine' => 'DefaultInferenceEngine',
        'description' => 'Description',
        'firstTokenLatencySeconds' => 'FirstTokenLatencySeconds',
        'imageId' => 'ImageId',
        'inputModalities' => 'InputModalities',
        'machineInputTokensPerSecond' => 'MachineInputTokensPerSecond',
        'machineOutputTokensPerSecond' => 'MachineOutputTokensPerSecond',
        'maxModelLen' => 'MaxModelLen',
        'maxModelLenMax' => 'MaxModelLenMax',
        'maxModelLenMin' => 'MaxModelLenMin',
        'maxNumSeqsMax' => 'MaxNumSeqsMax',
        'maxNumSeqsMin' => 'MaxNumSeqsMin',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'outputModalities' => 'OutputModalities',
        'recommended' => 'Recommended',
        'recommendedMaxNumSeqs' => 'RecommendedMaxNumSeqs',
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
        if (null !== $this->defaultInferenceEngine) {
            $res['DefaultInferenceEngine'] = $this->defaultInferenceEngine;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->firstTokenLatencySeconds) {
            $res['FirstTokenLatencySeconds'] = $this->firstTokenLatencySeconds;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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

        if (null !== $this->machineInputTokensPerSecond) {
            $res['MachineInputTokensPerSecond'] = $this->machineInputTokensPerSecond;
        }

        if (null !== $this->machineOutputTokensPerSecond) {
            $res['MachineOutputTokensPerSecond'] = $this->machineOutputTokensPerSecond;
        }

        if (null !== $this->maxModelLen) {
            $res['MaxModelLen'] = $this->maxModelLen;
        }

        if (null !== $this->maxModelLenMax) {
            $res['MaxModelLenMax'] = $this->maxModelLenMax;
        }

        if (null !== $this->maxModelLenMin) {
            $res['MaxModelLenMin'] = $this->maxModelLenMin;
        }

        if (null !== $this->maxNumSeqsMax) {
            $res['MaxNumSeqsMax'] = $this->maxNumSeqsMax;
        }

        if (null !== $this->maxNumSeqsMin) {
            $res['MaxNumSeqsMin'] = $this->maxNumSeqsMin;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
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

        if (null !== $this->recommended) {
            $res['Recommended'] = $this->recommended;
        }

        if (null !== $this->recommendedMaxNumSeqs) {
            $res['RecommendedMaxNumSeqs'] = $this->recommendedMaxNumSeqs;
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
        if (isset($map['DefaultInferenceEngine'])) {
            $model->defaultInferenceEngine = $map['DefaultInferenceEngine'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FirstTokenLatencySeconds'])) {
            $model->firstTokenLatencySeconds = $map['FirstTokenLatencySeconds'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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

        if (isset($map['MachineInputTokensPerSecond'])) {
            $model->machineInputTokensPerSecond = $map['MachineInputTokensPerSecond'];
        }

        if (isset($map['MachineOutputTokensPerSecond'])) {
            $model->machineOutputTokensPerSecond = $map['MachineOutputTokensPerSecond'];
        }

        if (isset($map['MaxModelLen'])) {
            $model->maxModelLen = $map['MaxModelLen'];
        }

        if (isset($map['MaxModelLenMax'])) {
            $model->maxModelLenMax = $map['MaxModelLenMax'];
        }

        if (isset($map['MaxModelLenMin'])) {
            $model->maxModelLenMin = $map['MaxModelLenMin'];
        }

        if (isset($map['MaxNumSeqsMax'])) {
            $model->maxNumSeqsMax = $map['MaxNumSeqsMax'];
        }

        if (isset($map['MaxNumSeqsMin'])) {
            $model->maxNumSeqsMin = $map['MaxNumSeqsMin'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
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

        if (isset($map['Recommended'])) {
            $model->recommended = $map['Recommended'];
        }

        if (isset($map['RecommendedMaxNumSeqs'])) {
            $model->recommendedMaxNumSeqs = $map['RecommendedMaxNumSeqs'];
        }

        return $model;
    }
}
