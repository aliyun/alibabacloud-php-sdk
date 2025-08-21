<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\outlines;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\simQuestions;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeFaqResponseBody\solutions;

class DescribeFaqResponseBody extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var int
     */
    public $effectStatus;

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
    public $modifyTime;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var simQuestions[]
     */
    public $simQuestions;

    /**
     * @var solutions[]
     */
    public $solutions;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'createTime' => 'CreateTime',
        'createUserName' => 'CreateUserName',
        'effectStatus' => 'EffectStatus',
        'endDate' => 'EndDate',
        'knowledgeId' => 'KnowledgeId',
        'modifyTime' => 'ModifyTime',
        'modifyUserName' => 'ModifyUserName',
        'outlines' => 'Outlines',
        'requestId' => 'RequestId',
        'simQuestions' => 'SimQuestions',
        'solutions' => 'Solutions',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->outlines)) {
            Model::validateArray($this->outlines);
        }
        if (\is_array($this->simQuestions)) {
            Model::validateArray($this->simQuestions);
        }
        if (\is_array($this->solutions)) {
            Model::validateArray($this->solutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->outlines)) {
                $res['Outlines'] = [];
                $n1 = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->simQuestions) {
            if (\is_array($this->simQuestions)) {
                $res['SimQuestions'] = [];
                $n1 = 0;
                foreach ($this->simQuestions as $item1) {
                    $res['SimQuestions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->solutions) {
            if (\is_array($this->solutions)) {
                $res['Solutions'] = [];
                $n1 = 0;
                foreach ($this->solutions as $item1) {
                    $res['Solutions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1] = outlines::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SimQuestions'])) {
            if (!empty($map['SimQuestions'])) {
                $model->simQuestions = [];
                $n1 = 0;
                foreach ($map['SimQuestions'] as $item1) {
                    $model->simQuestions[$n1] = simQuestions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = [];
                $n1 = 0;
                foreach ($map['Solutions'] as $item1) {
                    $model->solutions[$n1] = solutions::fromMap($item1);
                    ++$n1;
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
