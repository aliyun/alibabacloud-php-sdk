<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\categoryTags;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\examples;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\serviceInspection;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\transcription;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\CreateTaskRequest\variables;

class CreateTaskRequest extends Model
{
    /**
     * @var string
     */
    public $callBackUrl;

    /**
     * @var categoryTags[]
     */
    public $categoryTags;

    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @var dialogue
     */
    public $dialogue;

    /**
     * @var examples
     */
    public $examples;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var string
     */
    public $responseFormatType;

    /**
     * @var string[]
     */
    public $resultTypes;

    /**
     * @var serviceInspection
     */
    public $serviceInspection;

    /**
     * @var string
     */
    public $taskType;

    /**
     * @var string[]
     */
    public $templateIds;

    /**
     * @var transcription
     */
    public $transcription;

    /**
     * @var variables[]
     */
    public $variables;
    protected $_name = [
        'callBackUrl' => 'callBackUrl',
        'categoryTags' => 'categoryTags',
        'customPrompt' => 'customPrompt',
        'dialogue' => 'dialogue',
        'examples' => 'examples',
        'fields' => 'fields',
        'modelCode' => 'modelCode',
        'responseFormatType' => 'responseFormatType',
        'resultTypes' => 'resultTypes',
        'serviceInspection' => 'serviceInspection',
        'taskType' => 'taskType',
        'templateIds' => 'templateIds',
        'transcription' => 'transcription',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (\is_array($this->categoryTags)) {
            Model::validateArray($this->categoryTags);
        }
        if (null !== $this->dialogue) {
            $this->dialogue->validate();
        }
        if (null !== $this->examples) {
            $this->examples->validate();
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        if (\is_array($this->resultTypes)) {
            Model::validateArray($this->resultTypes);
        }
        if (null !== $this->serviceInspection) {
            $this->serviceInspection->validate();
        }
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        if (null !== $this->transcription) {
            $this->transcription->validate();
        }
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callBackUrl) {
            $res['callBackUrl'] = $this->callBackUrl;
        }

        if (null !== $this->categoryTags) {
            if (\is_array($this->categoryTags)) {
                $res['categoryTags'] = [];
                $n1 = 0;
                foreach ($this->categoryTags as $item1) {
                    $res['categoryTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }

        if (null !== $this->dialogue) {
            $res['dialogue'] = null !== $this->dialogue ? $this->dialogue->toArray($noStream) : $this->dialogue;
        }

        if (null !== $this->examples) {
            $res['examples'] = null !== $this->examples ? $this->examples->toArray($noStream) : $this->examples;
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->responseFormatType) {
            $res['responseFormatType'] = $this->responseFormatType;
        }

        if (null !== $this->resultTypes) {
            if (\is_array($this->resultTypes)) {
                $res['resultTypes'] = [];
                $n1 = 0;
                foreach ($this->resultTypes as $item1) {
                    $res['resultTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toArray($noStream) : $this->serviceInspection;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['templateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['templateIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->transcription) {
            $res['transcription'] = null !== $this->transcription ? $this->transcription->toArray($noStream) : $this->transcription;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['callBackUrl'])) {
            $model->callBackUrl = $map['callBackUrl'];
        }

        if (isset($map['categoryTags'])) {
            if (!empty($map['categoryTags'])) {
                $model->categoryTags = [];
                $n1 = 0;
                foreach ($map['categoryTags'] as $item1) {
                    $model->categoryTags[$n1] = categoryTags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }

        if (isset($map['dialogue'])) {
            $model->dialogue = dialogue::fromMap($map['dialogue']);
        }

        if (isset($map['examples'])) {
            $model->examples = examples::fromMap($map['examples']);
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1] = fields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['responseFormatType'])) {
            $model->responseFormatType = $map['responseFormatType'];
        }

        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = [];
                $n1 = 0;
                foreach ($map['resultTypes'] as $item1) {
                    $model->resultTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['serviceInspection']);
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        if (isset($map['templateIds'])) {
            if (!empty($map['templateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['templateIds'] as $item1) {
                    $model->templateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['transcription'])) {
            $model->transcription = transcription::fromMap($map['transcription']);
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = variables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
