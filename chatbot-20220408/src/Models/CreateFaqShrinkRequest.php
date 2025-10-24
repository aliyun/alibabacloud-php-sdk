<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class CreateFaqShrinkRequest extends Model
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
     * @var string
     */
    public $solutionContent;

    /**
     * @var int
     */
    public $solutionType;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $tagIdListShrink;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'categoryId' => 'CategoryId',
        'endDate' => 'EndDate',
        'solutionContent' => 'SolutionContent',
        'solutionType' => 'SolutionType',
        'startDate' => 'StartDate',
        'tagIdListShrink' => 'TagIdList',
        'title' => 'Title',
    ];

    public function validate()
    {
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

        if (null !== $this->solutionContent) {
            $res['SolutionContent'] = $this->solutionContent;
        }

        if (null !== $this->solutionType) {
            $res['SolutionType'] = $this->solutionType;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tagIdListShrink) {
            $res['TagIdList'] = $this->tagIdListShrink;
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

        if (isset($map['SolutionContent'])) {
            $model->solutionContent = $map['SolutionContent'];
        }

        if (isset($map['SolutionType'])) {
            $model->solutionType = $map['SolutionType'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TagIdList'])) {
            $model->tagIdListShrink = $map['TagIdList'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
