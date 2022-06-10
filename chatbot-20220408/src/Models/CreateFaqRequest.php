<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateFaqRequest extends Model
{
    /**
     * @description 业务空间key,不设置则访问默认业务空间，key值在主账号业务管理页面获取
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description 知识的类目ID
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description 失效时间
     *
     * @var string
     */
    public $endDate;

    /**
     * @description 默认答案内容
     *
     * @var string
     */
    public $solutionContent;

    /**
     * @description 默认答案类型
     *
     * @var int
     */
    public $solutionType;

    /**
     * @description 生效时间
     *
     * @var string
     */
    public $startDate;

    /**
     * @description 知识标题
     *
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
