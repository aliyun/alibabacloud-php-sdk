<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\serviceInspection;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionRequest\variables;

class RunCompletionRequest extends Model
{
    /**
     * @var dialogue
     */
    public $dialogue;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @var bool
     */
    public $stream;

    /**
     * @var int[]
     */
    public $templateIds;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'dialogue' => 'Dialogue',
        'fields' => 'Fields',
        'modelCode' => 'ModelCode',
        'serviceInspection' => 'ServiceInspection',
        'stream' => 'Stream',
        'templateIds' => 'TemplateIds',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (null !== $this->dialogue) {
            $this->dialogue->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (null !== $this->serviceInspection) {
            $this->serviceInspection->validate();
        }
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogue) {
            $res['Dialogue'] = null !== $this->dialogue ? $this->dialogue->toArray($noStream) : $this->dialogue;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modelCode) {
            $res['ModelCode'] = $this->modelCode;
        }

        if (null !== $this->serviceInspection) {
            $res['ServiceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toArray($noStream) : $this->serviceInspection;
        }

        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['TemplateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['TemplateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Dialogue'])) {
            $model->dialogue = dialogue::fromMap($map['Dialogue']);
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1++] = fields::fromMap($item1);
                }
            }
        }

        if (isset($map['ModelCode'])) {
            $model->modelCode = $map['ModelCode'];
        }

        if (isset($map['ServiceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['ServiceInspection']);
        }

        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['TemplateIds'] as $item1) {
                    $model->templateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1++] = variables::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
