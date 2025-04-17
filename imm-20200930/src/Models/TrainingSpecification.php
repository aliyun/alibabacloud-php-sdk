<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class TrainingSpecification extends Model
{
    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var ModelSpecification
     */
    public $modelSpecification;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var CustomParams[]
     */
    public $transforms;

    /**
     * @var string
     */
    public $validationSourceURI;

    /**
     * @var float
     */
    public $validationSplit;
    protected $_name = [
        'datasetName' => 'DatasetName',
        'endpoint' => 'Endpoint',
        'modelSpecification' => 'ModelSpecification',
        'runtime' => 'Runtime',
        'sourceURI' => 'SourceURI',
        'targetURI' => 'TargetURI',
        'transforms' => 'Transforms',
        'validationSourceURI' => 'ValidationSourceURI',
        'validationSplit' => 'ValidationSplit',
    ];

    public function validate()
    {
        if (null !== $this->modelSpecification) {
            $this->modelSpecification->validate();
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->transforms)) {
            Model::validateArray($this->transforms);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }

        if (null !== $this->modelSpecification) {
            $res['ModelSpecification'] = null !== $this->modelSpecification ? $this->modelSpecification->toArray($noStream) : $this->modelSpecification;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }

        if (null !== $this->transforms) {
            if (\is_array($this->transforms)) {
                $res['Transforms'] = [];
                $n1 = 0;
                foreach ($this->transforms as $item1) {
                    $res['Transforms'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Transforms'] as $item1) {
                    $model->transforms[$n1++] = CustomParams::fromMap($item1);
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
