<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GenerateTemplatePolicyRequest\parameters;

class GenerateTemplatePolicyRequest extends Model
{
    /**
     * @var string[]
     */
    public $generateOptions;

    /**
     * @var string[]
     */
    public $operationTypes;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateURL;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'generateOptions' => 'GenerateOptions',
        'operationTypes' => 'OperationTypes',
        'parameters' => 'Parameters',
        'templateBody' => 'TemplateBody',
        'templateId' => 'TemplateId',
        'templateURL' => 'TemplateURL',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->generateOptions)) {
            Model::validateArray($this->generateOptions);
        }
        if (\is_array($this->operationTypes)) {
            Model::validateArray($this->operationTypes);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateOptions) {
            if (\is_array($this->generateOptions)) {
                $res['GenerateOptions'] = [];
                $n1 = 0;
                foreach ($this->generateOptions as $item1) {
                    $res['GenerateOptions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operationTypes) {
            if (\is_array($this->operationTypes)) {
                $res['OperationTypes'] = [];
                $n1 = 0;
                foreach ($this->operationTypes as $item1) {
                    $res['OperationTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['GenerateOptions'])) {
            if (!empty($map['GenerateOptions'])) {
                $model->generateOptions = [];
                $n1 = 0;
                foreach ($map['GenerateOptions'] as $item1) {
                    $model->generateOptions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OperationTypes'])) {
            if (!empty($map['OperationTypes'])) {
                $model->operationTypes = [];
                $n1 = 0;
                foreach ($map['OperationTypes'] as $item1) {
                    $model->operationTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
