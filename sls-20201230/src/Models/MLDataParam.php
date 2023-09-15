<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

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
     * @example oss
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'annotationdataId' => 'annotationdataId',
        'annotations'      => 'annotations',
        'config'           => 'config',
        'createTime'       => 'createTime',
        'dataHash'         => 'dataHash',
        'datasetId'        => 'datasetId',
        'lastModifyTime'   => 'lastModifyTime',
        'predictions'      => 'predictions',
        'value'            => 'value',
        'valueType'        => 'valueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationdataId) {
            $res['annotationdataId'] = $this->annotationdataId;
        }
        if (null !== $this->annotations) {
            $res['annotations'] = [];
            if (null !== $this->annotations && \is_array($this->annotations)) {
                foreach ($this->annotations as $key => $val) {
                    $res['annotations'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->config) {
            $res['config'] = $this->config;
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
            $res['predictions'] = [];
            if (null !== $this->predictions && \is_array($this->predictions)) {
                foreach ($this->predictions as $key => $val) {
                    $res['predictions'][$key] = null !== $val ? $val->toMap() : $val;
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

    /**
     * @param array $map
     *
     * @return MLDataParam
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['annotationdataId'])) {
            $model->annotationdataId = $map['annotationdataId'];
        }
        if (isset($map['annotations'])) {
            $model->annotations = $map['annotations'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
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
            $model->predictions = $map['predictions'];
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
