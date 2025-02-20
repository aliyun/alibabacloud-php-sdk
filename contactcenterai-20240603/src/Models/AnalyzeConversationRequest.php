<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\categoryTags;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\examples;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\serviceInspection;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\userProfiles;

class AnalyzeConversationRequest extends Model
{
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
     * @var examples[]
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
     * @var string[]
     */
    public $resultTypes;
    /**
     * @var string
     */
    public $sceneName;
    /**
     * @var serviceInspection
     */
    public $serviceInspection;
    /**
     * @var string
     */
    public $sourceCallerUid;
    /**
     * @var bool
     */
    public $stream;
    /**
     * @var string[]
     */
    public $timeConstraintList;
    /**
     * @var userProfiles[]
     */
    public $userProfiles;
    protected $_name = [
        'categoryTags'       => 'categoryTags',
        'customPrompt'       => 'customPrompt',
        'dialogue'           => 'dialogue',
        'examples'           => 'examples',
        'fields'             => 'fields',
        'modelCode'          => 'modelCode',
        'resultTypes'        => 'resultTypes',
        'sceneName'          => 'sceneName',
        'serviceInspection'  => 'serviceInspection',
        'sourceCallerUid'    => 'sourceCallerUid',
        'stream'             => 'stream',
        'timeConstraintList' => 'timeConstraintList',
        'userProfiles'       => 'userProfiles',
    ];

    public function validate()
    {
        if (\is_array($this->categoryTags)) {
            Model::validateArray($this->categoryTags);
        }
        if (null !== $this->dialogue) {
            $this->dialogue->validate();
        }
        if (\is_array($this->examples)) {
            Model::validateArray($this->examples);
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
        if (\is_array($this->timeConstraintList)) {
            Model::validateArray($this->timeConstraintList);
        }
        if (\is_array($this->userProfiles)) {
            Model::validateArray($this->userProfiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryTags) {
            if (\is_array($this->categoryTags)) {
                $res['categoryTags'] = [];
                $n1                  = 0;
                foreach ($this->categoryTags as $item1) {
                    $res['categoryTags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->examples)) {
                $res['examples'] = [];
                $n1              = 0;
                foreach ($this->examples as $item1) {
                    $res['examples'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['fields'] = [];
                $n1            = 0;
                foreach ($this->fields as $item1) {
                    $res['fields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->resultTypes) {
            if (\is_array($this->resultTypes)) {
                $res['resultTypes'] = [];
                $n1                 = 0;
                foreach ($this->resultTypes as $item1) {
                    $res['resultTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }

        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toArray($noStream) : $this->serviceInspection;
        }

        if (null !== $this->sourceCallerUid) {
            $res['sourceCallerUid'] = $this->sourceCallerUid;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }

        if (null !== $this->timeConstraintList) {
            if (\is_array($this->timeConstraintList)) {
                $res['timeConstraintList'] = [];
                $n1                        = 0;
                foreach ($this->timeConstraintList as $item1) {
                    $res['timeConstraintList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userProfiles) {
            if (\is_array($this->userProfiles)) {
                $res['userProfiles'] = [];
                $n1                  = 0;
                foreach ($this->userProfiles as $item1) {
                    $res['userProfiles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['categoryTags'])) {
            if (!empty($map['categoryTags'])) {
                $model->categoryTags = [];
                $n1                  = 0;
                foreach ($map['categoryTags'] as $item1) {
                    $model->categoryTags[$n1++] = categoryTags::fromMap($item1);
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
            if (!empty($map['examples'])) {
                $model->examples = [];
                $n1              = 0;
                foreach ($map['examples'] as $item1) {
                    $model->examples[$n1++] = examples::fromMap($item1);
                }
            }
        }

        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n1            = 0;
                foreach ($map['fields'] as $item1) {
                    $model->fields[$n1++] = fields::fromMap($item1);
                }
            }
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = [];
                $n1                 = 0;
                foreach ($map['resultTypes'] as $item1) {
                    $model->resultTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }

        if (isset($map['serviceInspection'])) {
            $model->serviceInspection = serviceInspection::fromMap($map['serviceInspection']);
        }

        if (isset($map['sourceCallerUid'])) {
            $model->sourceCallerUid = $map['sourceCallerUid'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        if (isset($map['timeConstraintList'])) {
            if (!empty($map['timeConstraintList'])) {
                $model->timeConstraintList = [];
                $n1                        = 0;
                foreach ($map['timeConstraintList'] as $item1) {
                    $model->timeConstraintList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['userProfiles'])) {
            if (!empty($map['userProfiles'])) {
                $model->userProfiles = [];
                $n1                  = 0;
                foreach ($map['userProfiles'] as $item1) {
                    $model->userProfiles[$n1++] = userProfiles::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
