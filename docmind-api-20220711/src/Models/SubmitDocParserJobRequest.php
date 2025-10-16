<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobRequest\customOssConfig;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobRequest\LLMParam;
use AlibabaCloud\SDK\Docmindapi\V20220711\Models\SubmitDocParserJobRequest\multimediaParameters;

class SubmitDocParserJobRequest extends Model
{
    /**
     * @var customOssConfig
     */
    public $customOssConfig;

    /**
     * @var string
     */
    public $enhancementMode;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileNameExtension;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var bool
     */
    public $formulaEnhancement;

    /**
     * @var LLMParam
     */
    public $LLMParam;

    /**
     * @var bool
     */
    public $llmEnhancement;

    /**
     * @var multimediaParameters
     */
    public $multimediaParameters;

    /**
     * @var bool
     */
    public $needHeaderFooter;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var bool
     */
    public $outputHtmlTable;

    /**
     * @var string
     */
    public $pageIndex;
    protected $_name = [
        'customOssConfig' => 'CustomOssConfig',
        'enhancementMode' => 'EnhancementMode',
        'fileName' => 'FileName',
        'fileNameExtension' => 'FileNameExtension',
        'fileUrl' => 'FileUrl',
        'formulaEnhancement' => 'FormulaEnhancement',
        'LLMParam' => 'LLMParam',
        'llmEnhancement' => 'LlmEnhancement',
        'multimediaParameters' => 'MultimediaParameters',
        'needHeaderFooter' => 'NeedHeaderFooter',
        'option' => 'Option',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'outputHtmlTable' => 'OutputHtmlTable',
        'pageIndex' => 'PageIndex',
    ];

    public function validate()
    {
        if (null !== $this->customOssConfig) {
            $this->customOssConfig->validate();
        }
        if (null !== $this->LLMParam) {
            $this->LLMParam->validate();
        }
        if (null !== $this->multimediaParameters) {
            $this->multimediaParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customOssConfig) {
            $res['CustomOssConfig'] = null !== $this->customOssConfig ? $this->customOssConfig->toArray($noStream) : $this->customOssConfig;
        }

        if (null !== $this->enhancementMode) {
            $res['EnhancementMode'] = $this->enhancementMode;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->formulaEnhancement) {
            $res['FormulaEnhancement'] = $this->formulaEnhancement;
        }

        if (null !== $this->LLMParam) {
            $res['LLMParam'] = null !== $this->LLMParam ? $this->LLMParam->toArray($noStream) : $this->LLMParam;
        }

        if (null !== $this->llmEnhancement) {
            $res['LlmEnhancement'] = $this->llmEnhancement;
        }

        if (null !== $this->multimediaParameters) {
            $res['MultimediaParameters'] = null !== $this->multimediaParameters ? $this->multimediaParameters->toArray($noStream) : $this->multimediaParameters;
        }

        if (null !== $this->needHeaderFooter) {
            $res['NeedHeaderFooter'] = $this->needHeaderFooter;
        }

        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->outputHtmlTable) {
            $res['OutputHtmlTable'] = $this->outputHtmlTable;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
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
        if (isset($map['CustomOssConfig'])) {
            $model->customOssConfig = customOssConfig::fromMap($map['CustomOssConfig']);
        }

        if (isset($map['EnhancementMode'])) {
            $model->enhancementMode = $map['EnhancementMode'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['FormulaEnhancement'])) {
            $model->formulaEnhancement = $map['FormulaEnhancement'];
        }

        if (isset($map['LLMParam'])) {
            $model->LLMParam = LLMParam::fromMap($map['LLMParam']);
        }

        if (isset($map['LlmEnhancement'])) {
            $model->llmEnhancement = $map['LlmEnhancement'];
        }

        if (isset($map['MultimediaParameters'])) {
            $model->multimediaParameters = multimediaParameters::fromMap($map['MultimediaParameters']);
        }

        if (isset($map['NeedHeaderFooter'])) {
            $model->needHeaderFooter = $map['NeedHeaderFooter'];
        }

        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        if (isset($map['OutputHtmlTable'])) {
            $model->outputHtmlTable = $map['OutputHtmlTable'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        return $model;
    }
}
