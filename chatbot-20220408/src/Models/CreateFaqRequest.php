<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateFaqRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 1000053274
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example 2030-12-31T16:00:00Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $solutionContent;

    /**
     * @example 0
     *
     * @var int
     */
    public $solutionType;

    /**
     * @example 2022-05-25T16:28:36Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'categoryId'      => 'CategoryId',
        'endDate'         => 'EndDate',
        'solutionContent' => 'SolutionContent',
        'solutionType'    => 'SolutionType',
        'startDate'       => 'StartDate',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFaqRequest
     */
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
