<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerImageDataList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerImageURLList;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\RunMedQARequest\answerTextList;
use AlibabaCloud\Tea\Model;

class RunMedQARequest extends Model
{
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
    public $sessionId;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $questionType;

    /**
     * @var answerImageURLList[]
     */
    public $answerImageURLList;

    /**
     * @var answerImageDataList[]
     */
    public $answerImageDataList;

    /**
     * @var answerTextList[]
     */
    public $answerTextList;
    protected $_name = [
        'orgId'               => 'OrgId',
        'orgName'             => 'OrgName',
        'sessionId'           => 'SessionId',
        'department'          => 'Department',
        'questionType'        => 'QuestionType',
        'answerImageURLList'  => 'AnswerImageURLList',
        'answerImageDataList' => 'AnswerImageDataList',
        'answerTextList'      => 'AnswerTextList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->questionType) {
            $res['QuestionType'] = $this->questionType;
        }
        if (null !== $this->answerImageURLList) {
            $res['AnswerImageURLList'] = [];
            if (null !== $this->answerImageURLList && \is_array($this->answerImageURLList)) {
                $n = 0;
                foreach ($this->answerImageURLList as $item) {
                    $res['AnswerImageURLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->answerImageDataList) {
            $res['AnswerImageDataList'] = [];
            if (null !== $this->answerImageDataList && \is_array($this->answerImageDataList)) {
                $n = 0;
                foreach ($this->answerImageDataList as $item) {
                    $res['AnswerImageDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->answerTextList) {
            $res['AnswerTextList'] = [];
            if (null !== $this->answerTextList && \is_array($this->answerTextList)) {
                $n = 0;
                foreach ($this->answerTextList as $item) {
                    $res['AnswerTextList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMedQARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['QuestionType'])) {
            $model->questionType = $map['QuestionType'];
        }
        if (isset($map['AnswerImageURLList'])) {
            if (!empty($map['AnswerImageURLList'])) {
                $model->answerImageURLList = [];
                $n                         = 0;
                foreach ($map['AnswerImageURLList'] as $item) {
                    $model->answerImageURLList[$n++] = null !== $item ? answerImageURLList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnswerImageDataList'])) {
            if (!empty($map['AnswerImageDataList'])) {
                $model->answerImageDataList = [];
                $n                          = 0;
                foreach ($map['AnswerImageDataList'] as $item) {
                    $model->answerImageDataList[$n++] = null !== $item ? answerImageDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AnswerTextList'])) {
            if (!empty($map['AnswerTextList'])) {
                $model->answerTextList = [];
                $n                     = 0;
                foreach ($map['AnswerTextList'] as $item) {
                    $model->answerTextList[$n++] = null !== $item ? answerTextList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
