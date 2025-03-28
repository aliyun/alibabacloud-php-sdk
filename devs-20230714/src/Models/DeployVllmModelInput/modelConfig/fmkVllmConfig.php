<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployVllmModelInput\modelConfig;

use AlibabaCloud\Dara\Model;

class fmkVllmConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $blockSize;

    /**
     * @var string
     */
    public $chatTemplate;

    /**
     * @var string
     */
    public $dtype;

    /**
     * @var string
     */
    public $fullTextPostfix;

    /**
     * @var float
     */
    public $gpuMemoryUtilization;

    /**
     * @var string
     */
    public $loadFormat;

    /**
     * @var int
     */
    public $maxModelLen;

    /**
     * @var int
     */
    public $maxParallelLoadingWorkers;

    /**
     * @var string
     */
    public $quantization;

    /**
     * @var string
     */
    public $servedModelName;

    /**
     * @var int
     */
    public $swapSpace;
    protected $_name = [
        'apiKey' => 'apiKey',
        'blockSize' => 'blockSize',
        'chatTemplate' => 'chatTemplate',
        'dtype' => 'dtype',
        'fullTextPostfix' => 'fullTextPostfix',
        'gpuMemoryUtilization' => 'gpuMemoryUtilization',
        'loadFormat' => 'loadFormat',
        'maxModelLen' => 'maxModelLen',
        'maxParallelLoadingWorkers' => 'maxParallelLoadingWorkers',
        'quantization' => 'quantization',
        'servedModelName' => 'servedModelName',
        'swapSpace' => 'swapSpace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->blockSize) {
            $res['blockSize'] = $this->blockSize;
        }

        if (null !== $this->chatTemplate) {
            $res['chatTemplate'] = $this->chatTemplate;
        }

        if (null !== $this->dtype) {
            $res['dtype'] = $this->dtype;
        }

        if (null !== $this->fullTextPostfix) {
            $res['fullTextPostfix'] = $this->fullTextPostfix;
        }

        if (null !== $this->gpuMemoryUtilization) {
            $res['gpuMemoryUtilization'] = $this->gpuMemoryUtilization;
        }

        if (null !== $this->loadFormat) {
            $res['loadFormat'] = $this->loadFormat;
        }

        if (null !== $this->maxModelLen) {
            $res['maxModelLen'] = $this->maxModelLen;
        }

        if (null !== $this->maxParallelLoadingWorkers) {
            $res['maxParallelLoadingWorkers'] = $this->maxParallelLoadingWorkers;
        }

        if (null !== $this->quantization) {
            $res['quantization'] = $this->quantization;
        }

        if (null !== $this->servedModelName) {
            $res['servedModelName'] = $this->servedModelName;
        }

        if (null !== $this->swapSpace) {
            $res['swapSpace'] = $this->swapSpace;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['blockSize'])) {
            $model->blockSize = $map['blockSize'];
        }

        if (isset($map['chatTemplate'])) {
            $model->chatTemplate = $map['chatTemplate'];
        }

        if (isset($map['dtype'])) {
            $model->dtype = $map['dtype'];
        }

        if (isset($map['fullTextPostfix'])) {
            $model->fullTextPostfix = $map['fullTextPostfix'];
        }

        if (isset($map['gpuMemoryUtilization'])) {
            $model->gpuMemoryUtilization = $map['gpuMemoryUtilization'];
        }

        if (isset($map['loadFormat'])) {
            $model->loadFormat = $map['loadFormat'];
        }

        if (isset($map['maxModelLen'])) {
            $model->maxModelLen = $map['maxModelLen'];
        }

        if (isset($map['maxParallelLoadingWorkers'])) {
            $model->maxParallelLoadingWorkers = $map['maxParallelLoadingWorkers'];
        }

        if (isset($map['quantization'])) {
            $model->quantization = $map['quantization'];
        }

        if (isset($map['servedModelName'])) {
            $model->servedModelName = $map['servedModelName'];
        }

        if (isset($map['swapSpace'])) {
            $model->swapSpace = $map['swapSpace'];
        }

        return $model;
    }
}
