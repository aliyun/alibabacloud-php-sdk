<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CreateGenerateAICoachScriptTaskRequest\docList;

class CreateGenerateAICoachScriptTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $assessmentPoint;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $dialogueKey;

    /**
     * @var string
     */
    public $dialogueUrl;

    /**
     * @var docList[]
     */
    public $docList;

    /**
     * @var string[]
     */
    public $docUrlList;

    /**
     * @var string
     */
    public $scriptName;
    protected $_name = [
        'assessmentPoint' => 'assessmentPoint',
        'description' => 'description',
        'dialogueKey' => 'dialogueKey',
        'dialogueUrl' => 'dialogueUrl',
        'docList' => 'docList',
        'docUrlList' => 'docUrlList',
        'scriptName' => 'scriptName',
    ];

    public function validate()
    {
        if (\is_array($this->docList)) {
            Model::validateArray($this->docList);
        }
        if (\is_array($this->docUrlList)) {
            Model::validateArray($this->docUrlList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assessmentPoint) {
            $res['assessmentPoint'] = $this->assessmentPoint;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->dialogueKey) {
            $res['dialogueKey'] = $this->dialogueKey;
        }

        if (null !== $this->dialogueUrl) {
            $res['dialogueUrl'] = $this->dialogueUrl;
        }

        if (null !== $this->docList) {
            if (\is_array($this->docList)) {
                $res['docList'] = [];
                $n1 = 0;
                foreach ($this->docList as $item1) {
                    $res['docList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docUrlList) {
            if (\is_array($this->docUrlList)) {
                $res['docUrlList'] = [];
                $n1 = 0;
                foreach ($this->docUrlList as $item1) {
                    $res['docUrlList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
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
        if (isset($map['assessmentPoint'])) {
            $model->assessmentPoint = $map['assessmentPoint'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['dialogueKey'])) {
            $model->dialogueKey = $map['dialogueKey'];
        }

        if (isset($map['dialogueUrl'])) {
            $model->dialogueUrl = $map['dialogueUrl'];
        }

        if (isset($map['docList'])) {
            if (!empty($map['docList'])) {
                $model->docList = [];
                $n1 = 0;
                foreach ($map['docList'] as $item1) {
                    $model->docList[$n1] = docList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['docUrlList'])) {
            if (!empty($map['docUrlList'])) {
                $model->docUrlList = [];
                $n1 = 0;
                foreach ($map['docUrlList'] as $item1) {
                    $model->docUrlList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        return $model;
    }
}
