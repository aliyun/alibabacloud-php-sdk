<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class MLDataParam extends Model
{
    /**
     * @var string
     */
    public $annotationdataId;

    /**
     * @var MLDataParamAnnotationsValue[]
     */
    public $annotations;

    /**
     * @var string[]
     */
    public $config;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $dataHash;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var int
     */
    public $lastModifyTime;

    /**
     * @var MLDataParamPredictionsValue[]
     */
    public $predictions;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'annotationdataId' => 'annotationdataId',
        'annotations' => 'annotations',
        'config' => 'config',
        'createTime' => 'createTime',
        'dataHash' => 'dataHash',
        'datasetId' => 'datasetId',
        'lastModifyTime' => 'lastModifyTime',
        'predictions' => 'predictions',
        'value' => 'value',
        'valueType' => 'valueType',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->config)) {
            Model::validateArray($this->config);
        }
        if (\is_array($this->predictions)) {
            Model::validateArray($this->predictions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationdataId) {
            $res['annotationdataId'] = $this->annotationdataId;
        }

        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['annotations'] = [];
                foreach ($this->annotations as $key1 => $value1) {
                    $res['annotations'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->config) {
            if (\is_array($this->config)) {
                $res['config'] = [];
                foreach ($this->config as $key1 => $value1) {
                    $res['config'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dataHash) {
            $res['dataHash'] = $this->dataHash;
        }

        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }

        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->predictions) {
            if (\is_array($this->predictions)) {
                $res['predictions'] = [];
                foreach ($this->predictions as $key1 => $value1) {
                    $res['predictions'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
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
        if (isset($map['annotationdataId'])) {
            $model->annotationdataId = $map['annotationdataId'];
        }

        if (isset($map['annotations'])) {
            if (!empty($map['annotations'])) {
                $model->annotations = [];
                foreach ($map['annotations'] as $key1 => $value1) {
                    $model->annotations[$key1] = MLDataParamAnnotationsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['config'])) {
            if (!empty($map['config'])) {
                $model->config = [];
                foreach ($map['config'] as $key1 => $value1) {
                    $model->config[$key1] = $value1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dataHash'])) {
            $model->dataHash = $map['dataHash'];
        }

        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }

        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }

        if (isset($map['predictions'])) {
            if (!empty($map['predictions'])) {
                $model->predictions = [];
                foreach ($map['predictions'] as $key1 => $value1) {
                    $model->predictions[$key1] = MLDataParamPredictionsValue::fromMap($value1);
                }
            }
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
