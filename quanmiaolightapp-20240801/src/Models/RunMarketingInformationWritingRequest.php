<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunMarketingInformationWritingRequest extends Model
{
    /**
     * @var string
     */
    public $customLimitation;

    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @var string
     */
    public $inputExample;

    /**
     * @example qwen-max
     * qwen-plus
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $outputExample;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $writingType;
    protected $_name = [
        'customLimitation' => 'customLimitation',
        'customPrompt' => 'customPrompt',
        'inputExample' => 'inputExample',
        'modelId' => 'modelId',
        'outputExample' => 'outputExample',
        'sourceMaterial' => 'sourceMaterial',
        'writingType' => 'writingType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customLimitation) {
            $res['customLimitation'] = $this->customLimitation;
        }
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }
        if (null !== $this->inputExample) {
            $res['inputExample'] = $this->inputExample;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->outputExample) {
            $res['outputExample'] = $this->outputExample;
        }
        if (null !== $this->sourceMaterial) {
            $res['sourceMaterial'] = $this->sourceMaterial;
        }
        if (null !== $this->writingType) {
            $res['writingType'] = $this->writingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMarketingInformationWritingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customLimitation'])) {
            $model->customLimitation = $map['customLimitation'];
        }
        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }
        if (isset($map['inputExample'])) {
            $model->inputExample = $map['inputExample'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['outputExample'])) {
            $model->outputExample = $map['outputExample'];
        }
        if (isset($map['sourceMaterial'])) {
            $model->sourceMaterial = $map['sourceMaterial'];
        }
        if (isset($map['writingType'])) {
            $model->writingType = $map['writingType'];
        }

        return $model;
    }
}
