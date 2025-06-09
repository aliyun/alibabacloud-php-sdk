<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\CopilotAction\parameters;
use AlibabaCloud\SDK\Sls\V20201230\Models\CopilotAction\queryTemplateParameters;

class CopilotAction extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $queryMaxLength;

    /**
     * @var string
     */
    public $queryTemplate;

    /**
     * @var queryTemplateParameters[]
     */
    public $queryTemplateParameters;

    /**
     * @var string
     */
    public $scene;
    protected $_name = [
        'action' => 'action',
        'description' => 'description',
        'name' => 'name',
        'parameters' => 'parameters',
        'queryMaxLength' => 'queryMaxLength',
        'queryTemplate' => 'queryTemplate',
        'queryTemplateParameters' => 'queryTemplateParameters',
        'scene' => 'scene',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->queryTemplateParameters)) {
            Model::validateArray($this->queryTemplateParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->queryMaxLength) {
            $res['queryMaxLength'] = $this->queryMaxLength;
        }

        if (null !== $this->queryTemplate) {
            $res['queryTemplate'] = $this->queryTemplate;
        }

        if (null !== $this->queryTemplateParameters) {
            if (\is_array($this->queryTemplateParameters)) {
                $res['queryTemplateParameters'] = [];
                $n1 = 0;
                foreach ($this->queryTemplateParameters as $item1) {
                    $res['queryTemplateParameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['queryMaxLength'])) {
            $model->queryMaxLength = $map['queryMaxLength'];
        }

        if (isset($map['queryTemplate'])) {
            $model->queryTemplate = $map['queryTemplate'];
        }

        if (isset($map['queryTemplateParameters'])) {
            if (!empty($map['queryTemplateParameters'])) {
                $model->queryTemplateParameters = [];
                $n1 = 0;
                foreach ($map['queryTemplateParameters'] as $item1) {
                    $model->queryTemplateParameters[$n1++] = queryTemplateParameters::fromMap($item1);
                }
            }
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        return $model;
    }
}
