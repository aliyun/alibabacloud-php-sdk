<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\categoryTags;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\dialogue;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\examples;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\fields;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\serviceInspection;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\AnalyzeConversationRequest\userProfiles;
use AlibabaCloud\Tea\Model;

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
     * @example tyxmTurbo
     *
     * @var string
     */
    public $modelCode;

    /**
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example false
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryTags) {
            $res['categoryTags'] = [];
            if (null !== $this->categoryTags && \is_array($this->categoryTags)) {
                $n = 0;
                foreach ($this->categoryTags as $item) {
                    $res['categoryTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }
        if (null !== $this->dialogue) {
            $res['dialogue'] = null !== $this->dialogue ? $this->dialogue->toMap() : null;
        }
        if (null !== $this->examples) {
            $res['examples'] = [];
            if (null !== $this->examples && \is_array($this->examples)) {
                $n = 0;
                foreach ($this->examples as $item) {
                    $res['examples'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }
        if (null !== $this->resultTypes) {
            $res['resultTypes'] = $this->resultTypes;
        }
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->serviceInspection) {
            $res['serviceInspection'] = null !== $this->serviceInspection ? $this->serviceInspection->toMap() : null;
        }
        if (null !== $this->sourceCallerUid) {
            $res['sourceCallerUid'] = $this->sourceCallerUid;
        }
        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
        }
        if (null !== $this->timeConstraintList) {
            $res['timeConstraintList'] = $this->timeConstraintList;
        }
        if (null !== $this->userProfiles) {
            $res['userProfiles'] = [];
            if (null !== $this->userProfiles && \is_array($this->userProfiles)) {
                $n = 0;
                foreach ($this->userProfiles as $item) {
                    $res['userProfiles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeConversationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryTags'])) {
            if (!empty($map['categoryTags'])) {
                $model->categoryTags = [];
                $n                   = 0;
                foreach ($map['categoryTags'] as $item) {
                    $model->categoryTags[$n++] = null !== $item ? categoryTags::fromMap($item) : $item;
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
                $n               = 0;
                foreach ($map['examples'] as $item) {
                    $model->examples[$n++] = null !== $item ? examples::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }
        if (isset($map['resultTypes'])) {
            if (!empty($map['resultTypes'])) {
                $model->resultTypes = $map['resultTypes'];
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
                $model->timeConstraintList = $map['timeConstraintList'];
            }
        }
        if (isset($map['userProfiles'])) {
            if (!empty($map['userProfiles'])) {
                $model->userProfiles = [];
                $n                   = 0;
                foreach ($map['userProfiles'] as $item) {
                    $model->userProfiles[$n++] = null !== $item ? userProfiles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
