<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class SubmitDocParserJobShrinkRequest extends Model
{
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
     * @var bool
     */
    public $llmEnhancement;

    /**
     * @var string
     */
    public $multimediaParametersShrink;

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
        'enhancementMode' => 'EnhancementMode',
        'fileName' => 'FileName',
        'fileNameExtension' => 'FileNameExtension',
        'fileUrl' => 'FileUrl',
        'formulaEnhancement' => 'FormulaEnhancement',
        'llmEnhancement' => 'LlmEnhancement',
        'multimediaParametersShrink' => 'MultimediaParameters',
        'option' => 'Option',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'outputHtmlTable' => 'OutputHtmlTable',
        'pageIndex' => 'PageIndex',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->llmEnhancement) {
            $res['LlmEnhancement'] = $this->llmEnhancement;
        }

        if (null !== $this->multimediaParametersShrink) {
            $res['MultimediaParameters'] = $this->multimediaParametersShrink;
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

        if (isset($map['LlmEnhancement'])) {
            $model->llmEnhancement = $map['LlmEnhancement'];
        }

        if (isset($map['MultimediaParameters'])) {
            $model->multimediaParametersShrink = $map['MultimediaParameters'];
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
