<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class UpdateFaqRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int[]
     */
    public $tagIdList;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'categoryId' => 'CategoryId',
        'endDate' => 'EndDate',
        'knowledgeId' => 'KnowledgeId',
        'startDate' => 'StartDate',
        'tagIdList' => 'TagIdList',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->tagIdList)) {
            Model::validateArray($this->tagIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tagIdList) {
            if (\is_array($this->tagIdList)) {
                $res['TagIdList'] = [];
                $n1 = 0;
                foreach ($this->tagIdList as $item1) {
                    $res['TagIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TagIdList'])) {
            if (!empty($map['TagIdList'])) {
                $model->tagIdList = [];
                $n1 = 0;
                foreach ($map['TagIdList'] as $item1) {
                    $model->tagIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
