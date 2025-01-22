<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\SubmitChatQuestionRequest\questionList;

class SubmitChatQuestionRequest extends Model
{
    /**
     * @var string
     */
    public $gmtService;
    /**
     * @var string
     */
    public $liveScriptContent;
    /**
     * @var bool
     */
    public $openSmallTalk;
    /**
     * @var questionList[]
     */
    public $questionList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'gmtService'        => 'gmtService',
        'liveScriptContent' => 'liveScriptContent',
        'openSmallTalk'     => 'openSmallTalk',
        'questionList'      => 'questionList',
        'requestId'         => 'requestId',
        'sessionId'         => 'sessionId',
    ];

    public function validate()
    {
        if (\is_array($this->questionList)) {
            Model::validateArray($this->questionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtService) {
            $res['gmtService'] = $this->gmtService;
        }

        if (null !== $this->liveScriptContent) {
            $res['liveScriptContent'] = $this->liveScriptContent;
        }

        if (null !== $this->openSmallTalk) {
            $res['openSmallTalk'] = $this->openSmallTalk;
        }

        if (null !== $this->questionList) {
            if (\is_array($this->questionList)) {
                $res['questionList'] = [];
                $n1                  = 0;
                foreach ($this->questionList as $item1) {
                    $res['questionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['gmtService'])) {
            $model->gmtService = $map['gmtService'];
        }

        if (isset($map['liveScriptContent'])) {
            $model->liveScriptContent = $map['liveScriptContent'];
        }

        if (isset($map['openSmallTalk'])) {
            $model->openSmallTalk = $map['openSmallTalk'];
        }

        if (isset($map['questionList'])) {
            if (!empty($map['questionList'])) {
                $model->questionList = [];
                $n1                  = 0;
                foreach ($map['questionList'] as $item1) {
                    $model->questionList[$n1++] = questionList::fromMap($item1);
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
