<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachAssessmentPointResponseBody\answerList;

class GetAICoachAssessmentPointResponseBody extends Model
{
    /**
     * @var answerList[]
     */
    public $answerList;

    /**
     * @var int
     */
    public $citations;

    /**
     * @var string
     */
    public $documentId;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $kbId;

    /**
     * @var string
     */
    public $kbType;

    /**
     * @var string[]
     */
    public $knowledgeList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pointId;

    /**
     * @var string
     */
    public $questionDescription;

    /**
     * @var string
     */
    public $questionSample;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'answerList' => 'answerList',
        'citations' => 'citations',
        'documentId' => 'documentId',
        'documentName' => 'documentName',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'kbId' => 'kbId',
        'kbType' => 'kbType',
        'knowledgeList' => 'knowledgeList',
        'name' => 'name',
        'pointId' => 'pointId',
        'questionDescription' => 'questionDescription',
        'questionSample' => 'questionSample',
        'requestId' => 'requestId',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->answerList)) {
            Model::validateArray($this->answerList);
        }
        if (\is_array($this->knowledgeList)) {
            Model::validateArray($this->knowledgeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answerList) {
            if (\is_array($this->answerList)) {
                $res['answerList'] = [];
                $n1 = 0;
                foreach ($this->answerList as $item1) {
                    $res['answerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->citations) {
            $res['citations'] = $this->citations;
        }

        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        if (null !== $this->documentName) {
            $res['documentName'] = $this->documentName;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->kbId) {
            $res['kbId'] = $this->kbId;
        }

        if (null !== $this->kbType) {
            $res['kbType'] = $this->kbType;
        }

        if (null !== $this->knowledgeList) {
            if (\is_array($this->knowledgeList)) {
                $res['knowledgeList'] = [];
                $n1 = 0;
                foreach ($this->knowledgeList as $item1) {
                    $res['knowledgeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pointId) {
            $res['pointId'] = $this->pointId;
        }

        if (null !== $this->questionDescription) {
            $res['questionDescription'] = $this->questionDescription;
        }

        if (null !== $this->questionSample) {
            $res['questionSample'] = $this->questionSample;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['answerList'])) {
            if (!empty($map['answerList'])) {
                $model->answerList = [];
                $n1 = 0;
                foreach ($map['answerList'] as $item1) {
                    $model->answerList[$n1] = answerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['citations'])) {
            $model->citations = $map['citations'];
        }

        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        if (isset($map['documentName'])) {
            $model->documentName = $map['documentName'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['kbId'])) {
            $model->kbId = $map['kbId'];
        }

        if (isset($map['kbType'])) {
            $model->kbType = $map['kbType'];
        }

        if (isset($map['knowledgeList'])) {
            if (!empty($map['knowledgeList'])) {
                $model->knowledgeList = [];
                $n1 = 0;
                foreach ($map['knowledgeList'] as $item1) {
                    $model->knowledgeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pointId'])) {
            $model->pointId = $map['pointId'];
        }

        if (isset($map['questionDescription'])) {
            $model->questionDescription = $map['questionDescription'];
        }

        if (isset($map['questionSample'])) {
            $model->questionSample = $map['questionSample'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
