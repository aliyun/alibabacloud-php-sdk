<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateRequest\terraformVariables;
use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
     * @description The content of the template.
     *
     * For more information about the template syntax, see [Structure of Terraform templates](~~184397~~).
     * @example {
     * }
     * @var string
     */
    public $templateBody;

    /**
     * @description The type of the template.
     *
     * Set the value to RosTerraformTemplate, which specifies the Terraform template that is supported by Resource Orchestration Service (ROS).
     * @example RosTerraformTemplate
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The variable settings of the Terraform template. You can configure the variables in a structured manner. Service Catalog applies the variable settings to the template.
     *
     * > The variables must be defined in the Terraform template.
     * @var terraformVariables[]
     */
    public $terraformVariables;
    protected $_name = [
        'templateBody'       => 'TemplateBody',
        'templateType'       => 'TemplateType',
        'terraformVariables' => 'TerraformVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->terraformVariables) {
            $res['TerraformVariables'] = [];
            if (null !== $this->terraformVariables && \is_array($this->terraformVariables)) {
                $n = 0;
                foreach ($this->terraformVariables as $item) {
                    $res['TerraformVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TerraformVariables'])) {
            if (!empty($map['TerraformVariables'])) {
                $model->terraformVariables = [];
                $n                         = 0;
                foreach ($map['TerraformVariables'] as $item) {
                    $model->terraformVariables[$n++] = null !== $item ? terraformVariables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
