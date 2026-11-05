<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDataProcessJobTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var bool
     */
    public $captioning;

    /**
     * @var string
     */
    public $captioningPrompt;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var bool
     */
    public $embedding;

    /**
     * @var int
     */
    public $embeddingDimension;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'captioning' => 'Captioning',
        'captioningPrompt' => 'CaptioningPrompt',
        'creationTime' => 'CreationTime',
        'embedding' => 'Embedding',
        'embeddingDimension' => 'EmbeddingDimension',
        'status' => 'Status',
        'templateConfig' => 'TemplateConfig',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->captioning) {
            $res['Captioning'] = $this->captioning;
        }

        if (null !== $this->captioningPrompt) {
            $res['CaptioningPrompt'] = $this->captioningPrompt;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->embedding) {
            $res['Embedding'] = $this->embedding;
        }

        if (null !== $this->embeddingDimension) {
            $res['EmbeddingDimension'] = $this->embeddingDimension;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
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
        if (isset($map['Captioning'])) {
            $model->captioning = $map['Captioning'];
        }

        if (isset($map['CaptioningPrompt'])) {
            $model->captioningPrompt = $map['CaptioningPrompt'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Embedding'])) {
            $model->embedding = $map['Embedding'];
        }

        if (isset($map['EmbeddingDimension'])) {
            $model->embeddingDimension = $map['EmbeddingDimension'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
