<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class TrainingSpecification extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description This parameter is required.
     *
     * @var ModelSpecification
     */
    public $modelSpecification;

    /**
     * @description This parameter is required.
     *
     * @var Runtime
     */
    public $runtime;

    /**
     * @description This parameter is required.
     *
     * @example oss://imm-alg-dataset-bj/cifar10/test_index.json
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description This parameter is required.
     *
     * @example oss://imm-alg-dataset-bj/model_training_test/
     *
     * @var string
     */
    public $targetURI;

    /**
     * @var CustomParams[]
     */
    public $transforms;

    /**
     * @example oss://imm-alg-dataset-bj/cifar10/test_index.json
     *
     * @var string
     */
    public $validationSourceURI;

    /**
     * @example 0.95
     *
     * @var float
     */
    public $validationSplit;
    protected $_name = [
        'datasetName'         => 'DatasetName',
        'endpoint'            => 'Endpoint',
        'modelSpecification'  => 'ModelSpecification',
        'runtime'             => 'Runtime',
        'sourceURI'           => 'SourceURI',
        'targetURI'           => 'TargetURI',
        'transforms'          => 'Transforms',
        'validationSourceURI' => 'ValidationSourceURI',
        'validationSplit'     => 'ValidationSplit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->modelSpecification) {
            $res['ModelSpecification'] = null !== $this->modelSpecification ? $this->modelSpecification->toMap() : null;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }
        if (null !== $this->transforms) {
            $res['Transforms'] = [];
            if (null !== $this->transforms && \is_array($this->transforms)) {
                $n = 0;
                foreach ($this->transforms as $item) {
                    $res['Transforms'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->validationSourceURI) {
            $res['ValidationSourceURI'] = $this->validationSourceURI;
        }
        if (null !== $this->validationSplit) {
            $res['ValidationSplit'] = $this->validationSplit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TrainingSpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ModelSpecification'])) {
            $model->modelSpecification = ModelSpecification::fromMap($map['ModelSpecification']);
        }
        if (isset($map['Runtime'])) {
            $model->runtime = Runtime::fromMap($map['Runtime']);
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }
        if (isset($map['Transforms'])) {
            if (!empty($map['Transforms'])) {
                $model->transforms = [];
                $n                 = 0;
                foreach ($map['Transforms'] as $item) {
                    $model->transforms[$n++] = null !== $item ? CustomParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ValidationSourceURI'])) {
            $model->validationSourceURI = $map['ValidationSourceURI'];
        }
        if (isset($map['ValidationSplit'])) {
            $model->validationSplit = $map['ValidationSplit'];
        }

        return $model;
    }
}
