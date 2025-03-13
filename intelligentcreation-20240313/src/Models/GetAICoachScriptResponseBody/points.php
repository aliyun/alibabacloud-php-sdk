<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachScriptResponseBody\points\answerList;
use AlibabaCloud\Tea\Model;

class points extends Model
{
    /**
     * @var answerList[]
     */
    public $answerList;

    /**
     * @var string[]
     */
    public $knowledgeList;

    /**
     * @example demo
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pointId;

    /**
     * @example test
     *
     * @var string
     */
    public $questionDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $sortNo;

    /**
     * @example 50
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'answerList'          => 'answerList',
        'knowledgeList'       => 'knowledgeList',
        'name'                => 'name',
        'pointId'             => 'pointId',
        'questionDescription' => 'questionDescription',
        'sortNo'              => 'sortNo',
        'weight'              => 'weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerList) {
            $res['answerList'] = [];
            if (null !== $this->answerList && \is_array($this->answerList)) {
                $n = 0;
                foreach ($this->answerList as $item) {
                    $res['answerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->knowledgeList) {
            $res['knowledgeList'] = $this->knowledgeList;
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
        if (null !== $this->sortNo) {
            $res['sortNo'] = $this->sortNo;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return points
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answerList'])) {
            if (!empty($map['answerList'])) {
                $model->answerList = [];
                $n                 = 0;
                foreach ($map['answerList'] as $item) {
                    $model->answerList[$n++] = null !== $item ? answerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['knowledgeList'])) {
            if (!empty($map['knowledgeList'])) {
                $model->knowledgeList = $map['knowledgeList'];
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
        if (isset($map['sortNo'])) {
            $model->sortNo = $map['sortNo'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
