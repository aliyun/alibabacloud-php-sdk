<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListLlmTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefaultModel;

    /**
     * @var string
     */
    public $llmCode;

    /**
     * @var string
     */
    public $llmTemplateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $providerTemplateId;
    protected $_name = [
        'config' => 'Config',
        'description' => 'Description',
        'isDefaultModel' => 'IsDefaultModel',
        'llmCode' => 'LlmCode',
        'llmTemplateId' => 'LlmTemplateId',
        'name' => 'Name',
        'providerTemplateId' => 'ProviderTemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isDefaultModel) {
            $res['IsDefaultModel'] = $this->isDefaultModel;
        }

        if (null !== $this->llmCode) {
            $res['LlmCode'] = $this->llmCode;
        }

        if (null !== $this->llmTemplateId) {
            $res['LlmTemplateId'] = $this->llmTemplateId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->providerTemplateId) {
            $res['ProviderTemplateId'] = $this->providerTemplateId;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsDefaultModel'])) {
            $model->isDefaultModel = $map['IsDefaultModel'];
        }

        if (isset($map['LlmCode'])) {
            $model->llmCode = $map['LlmCode'];
        }

        if (isset($map['LlmTemplateId'])) {
            $model->llmTemplateId = $map['LlmTemplateId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProviderTemplateId'])) {
            $model->providerTemplateId = $map['ProviderTemplateId'];
        }

        return $model;
    }
}
