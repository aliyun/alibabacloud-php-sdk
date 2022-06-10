<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\outlines;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\simQuestions;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\solutions;
use AlibabaCloud\Tea\Model;

class DescribeFaqResponseBody extends Model
{
    /**
     * @description 类目ID
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description 创建时间（UTC时间）
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 创建人
     *
     * @var string
     */
    public $createUserName;

    /**
     * @description 知识生效状态,根据StartDate, EndDate计算出来: 20-生效中, 21-已失效, 22-待生效
     *
     * @var int
     */
    public $effectStatus;

    /**
     * @description 失效时间（UTC时间）
     *
     * @var string
     */
    public $endDate;

    /**
     * @description 知识ID
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @description 修改时间（UTC时间）
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifyUserName;

    /**
     * @description 关联问列表
     *
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @description 相似问列表
     *
     * @var simQuestions[]
     */
    public $simQuestions;

    /**
     * @description 答案列表
     *
     * @var solutions[]
     */
    public $solutions;

    /**
     * @description 生效时间（UTC时间）
     *
     * @var string
     */
    public $startDate;

    /**
     * @description 知识状态: -1-已删除未发布, 1-未发布, 2-已发布, 3-已更新未发布
     *
     * @var int
     */
    public $status;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'createTime'     => 'CreateTime',
        'createUserName' => 'CreateUserName',
        'effectStatus'   => 'EffectStatus',
        'endDate'        => 'EndDate',
        'knowledgeId'    => 'KnowledgeId',
        'modifyTime'     => 'ModifyTime',
        'modifyUserName' => 'ModifyUserName',
        'outlines'       => 'Outlines',
        'requestId'      => 'RequestId',
        'simQuestions'   => 'SimQuestions',
        'solutions'      => 'Solutions',
        'startDate'      => 'StartDate',
        'status'         => 'Status',
        'title'          => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->effectStatus) {
            $res['EffectStatus'] = $this->effectStatus;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->simQuestions) {
            $res['SimQuestions'] = [];
            if (null !== $this->simQuestions && \is_array($this->simQuestions)) {
                $n = 0;
                foreach ($this->simQuestions as $item) {
                    $res['SimQuestions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->solutions) {
            $res['Solutions'] = [];
            if (null !== $this->solutions && \is_array($this->solutions)) {
                $n = 0;
                foreach ($this->solutions as $item) {
                    $res['Solutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFaqResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['EffectStatus'])) {
            $model->effectStatus = $map['EffectStatus'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n               = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SimQuestions'])) {
            if (!empty($map['SimQuestions'])) {
                $model->simQuestions = [];
                $n                   = 0;
                foreach ($map['SimQuestions'] as $item) {
                    $model->simQuestions[$n++] = null !== $item ? simQuestions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = [];
                $n                = 0;
                foreach ($map['Solutions'] as $item) {
                    $model->solutions[$n++] = null !== $item ? solutions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
