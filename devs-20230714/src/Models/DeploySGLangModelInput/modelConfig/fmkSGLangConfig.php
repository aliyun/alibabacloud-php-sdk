<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeploySGLangModelInput\modelConfig;

use AlibabaCloud\Dara\Model;

class fmkSGLangConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

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
     * @var string
     */
    public $loadFormat;

    /**
     * @var int
     */
    public $maxRunningRequests;

    /**
     * @var int
     */
    public $maxTotalTokens;

    /**
     * @var float
     */
    public $memFractionStatic;

    /**
     * @var string
     */
    public $quantization;

    /**
     * @var string
     */
    public $servedModelName;
    protected $_name = [
        'apiKey' => 'apiKey',
        'chatTemplate' => 'chatTemplate',
        'dtype' => 'dtype',
        'fullTextPostfix' => 'fullTextPostfix',
        'loadFormat' => 'loadFormat',
        'maxRunningRequests' => 'maxRunningRequests',
        'maxTotalTokens' => 'maxTotalTokens',
        'memFractionStatic' => 'memFractionStatic',
        'quantization' => 'quantization',
        'servedModelName' => 'servedModelName',
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

        if (null !== $this->chatTemplate) {
            $res['chatTemplate'] = $this->chatTemplate;
        }

        if (null !== $this->dtype) {
            $res['dtype'] = $this->dtype;
        }

        if (null !== $this->fullTextPostfix) {
            $res['fullTextPostfix'] = $this->fullTextPostfix;
        }

        if (null !== $this->loadFormat) {
            $res['loadFormat'] = $this->loadFormat;
        }

        if (null !== $this->maxRunningRequests) {
            $res['maxRunningRequests'] = $this->maxRunningRequests;
        }

        if (null !== $this->maxTotalTokens) {
            $res['maxTotalTokens'] = $this->maxTotalTokens;
        }

        if (null !== $this->memFractionStatic) {
            $res['memFractionStatic'] = $this->memFractionStatic;
        }

        if (null !== $this->quantization) {
            $res['quantization'] = $this->quantization;
        }

        if (null !== $this->servedModelName) {
            $res['servedModelName'] = $this->servedModelName;
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

        if (isset($map['chatTemplate'])) {
            $model->chatTemplate = $map['chatTemplate'];
        }

        if (isset($map['dtype'])) {
            $model->dtype = $map['dtype'];
        }

        if (isset($map['fullTextPostfix'])) {
            $model->fullTextPostfix = $map['fullTextPostfix'];
        }

        if (isset($map['loadFormat'])) {
            $model->loadFormat = $map['loadFormat'];
        }

        if (isset($map['maxRunningRequests'])) {
            $model->maxRunningRequests = $map['maxRunningRequests'];
        }

        if (isset($map['maxTotalTokens'])) {
            $model->maxTotalTokens = $map['maxTotalTokens'];
        }

        if (isset($map['memFractionStatic'])) {
            $model->memFractionStatic = $map['memFractionStatic'];
        }

        if (isset($map['quantization'])) {
            $model->quantization = $map['quantization'];
        }

        if (isset($map['servedModelName'])) {
            $model->servedModelName = $map['servedModelName'];
        }

        return $model;
    }
}
