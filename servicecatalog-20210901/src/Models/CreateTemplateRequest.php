<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateRequest\terraformVariables;

class CreateTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var terraformVariables[]
     */
    public $terraformVariables;
    protected $_name = [
        'templateBody' => 'TemplateBody',
        'templateType' => 'TemplateType',
        'terraformVariables' => 'TerraformVariables',
    ];

    public function validate()
    {
        if (\is_array($this->terraformVariables)) {
            Model::validateArray($this->terraformVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->terraformVariables) {
            if (\is_array($this->terraformVariables)) {
                $res['TerraformVariables'] = [];
                $n1 = 0;
                foreach ($this->terraformVariables as $item1) {
                    $res['TerraformVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['TerraformVariables'])) {
            if (!empty($map['TerraformVariables'])) {
                $model->terraformVariables = [];
                $n1 = 0;
                foreach ($map['TerraformVariables'] as $item1) {
                    $model->terraformVariables[$n1] = terraformVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
