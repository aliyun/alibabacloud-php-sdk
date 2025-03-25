<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerImageDataList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerImageURLList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerTextList;

class RunMedQARequest extends Model
{
    /**
     * @var answerImageDataList[]
     */
    public $answerImageDataList;

    /**
     * @var answerImageURLList[]
     */
    public $answerImageURLList;

    /**
     * @var answerTextList[]
     */
    public $answerTextList;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $questionType;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'answerImageDataList' => 'AnswerImageDataList',
        'answerImageURLList' => 'AnswerImageURLList',
        'answerTextList' => 'AnswerTextList',
        'department' => 'Department',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'questionType' => 'QuestionType',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->answerImageDataList)) {
            Model::validateArray($this->answerImageDataList);
        }
        if (\is_array($this->answerImageURLList)) {
            Model::validateArray($this->answerImageURLList);
        }
        if (\is_array($this->answerTextList)) {
            Model::validateArray($this->answerTextList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerImageDataList) {
            if (\is_array($this->answerImageDataList)) {
                $res['AnswerImageDataList'] = [];
                $n1 = 0;
                foreach ($this->answerImageDataList as $item1) {
                    $res['AnswerImageDataList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->answerImageURLList) {
            if (\is_array($this->answerImageURLList)) {
                $res['AnswerImageURLList'] = [];
                $n1 = 0;
                foreach ($this->answerImageURLList as $item1) {
                    $res['AnswerImageURLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->answerTextList) {
            if (\is_array($this->answerTextList)) {
                $res['AnswerTextList'] = [];
                $n1 = 0;
                foreach ($this->answerTextList as $item1) {
                    $res['AnswerTextList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->questionType) {
            $res['QuestionType'] = $this->questionType;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AnswerImageDataList'])) {
            if (!empty($map['AnswerImageDataList'])) {
                $model->answerImageDataList = [];
                $n1 = 0;
                foreach ($map['AnswerImageDataList'] as $item1) {
                    $model->answerImageDataList[$n1++] = answerImageDataList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnswerImageURLList'])) {
            if (!empty($map['AnswerImageURLList'])) {
                $model->answerImageURLList = [];
                $n1 = 0;
                foreach ($map['AnswerImageURLList'] as $item1) {
                    $model->answerImageURLList[$n1++] = answerImageURLList::fromMap($item1);
                }
            }
        }

        if (isset($map['AnswerTextList'])) {
            if (!empty($map['AnswerTextList'])) {
                $model->answerTextList = [];
                $n1 = 0;
                foreach ($map['AnswerTextList'] as $item1) {
                    $model->answerTextList[$n1++] = answerTextList::fromMap($item1);
                }
            }
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['QuestionType'])) {
            $model->questionType = $map['QuestionType'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
