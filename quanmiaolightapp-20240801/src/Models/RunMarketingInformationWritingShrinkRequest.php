<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunMarketingInformationWritingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

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
    public $extParametersShrink;

    /**
     * @var string
     */
    public $generateCount;

    /**
     * @var string
     */
    public $inputExample;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $otherRequirements;

    /**
     * @var string
     */
    public $outputExample;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $wordCountRange;

    /**
     * @var string
     */
    public $writingType;
    protected $_name = [
        'apiKey' => 'apiKey',
        'customLimitation' => 'customLimitation',
        'customPrompt' => 'customPrompt',
        'extParametersShrink' => 'extParameters',
        'generateCount' => 'generateCount',
        'inputExample' => 'inputExample',
        'keywords' => 'keywords',
        'language' => 'language',
        'modelId' => 'modelId',
        'otherRequirements' => 'otherRequirements',
        'outputExample' => 'outputExample',
        'prompt' => 'prompt',
        'sourceMaterial' => 'sourceMaterial',
        'wordCountRange' => 'wordCountRange',
        'writingType' => 'writingType',
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

        if (null !== $this->customLimitation) {
            $res['customLimitation'] = $this->customLimitation;
        }

        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }

        if (null !== $this->extParametersShrink) {
            $res['extParameters'] = $this->extParametersShrink;
        }

        if (null !== $this->generateCount) {
            $res['generateCount'] = $this->generateCount;
        }

        if (null !== $this->inputExample) {
            $res['inputExample'] = $this->inputExample;
        }

        if (null !== $this->keywords) {
            $res['keywords'] = $this->keywords;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->otherRequirements) {
            $res['otherRequirements'] = $this->otherRequirements;
        }

        if (null !== $this->outputExample) {
            $res['outputExample'] = $this->outputExample;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->sourceMaterial) {
            $res['sourceMaterial'] = $this->sourceMaterial;
        }

        if (null !== $this->wordCountRange) {
            $res['wordCountRange'] = $this->wordCountRange;
        }

        if (null !== $this->writingType) {
            $res['writingType'] = $this->writingType;
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

        if (isset($map['customLimitation'])) {
            $model->customLimitation = $map['customLimitation'];
        }

        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }

        if (isset($map['extParameters'])) {
            $model->extParametersShrink = $map['extParameters'];
        }

        if (isset($map['generateCount'])) {
            $model->generateCount = $map['generateCount'];
        }

        if (isset($map['inputExample'])) {
            $model->inputExample = $map['inputExample'];
        }

        if (isset($map['keywords'])) {
            $model->keywords = $map['keywords'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['otherRequirements'])) {
            $model->otherRequirements = $map['otherRequirements'];
        }

        if (isset($map['outputExample'])) {
            $model->outputExample = $map['outputExample'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['sourceMaterial'])) {
            $model->sourceMaterial = $map['sourceMaterial'];
        }

        if (isset($map['wordCountRange'])) {
            $model->wordCountRange = $map['wordCountRange'];
        }

        if (isset($map['writingType'])) {
            $model->writingType = $map['writingType'];
        }

        return $model;
    }
}
