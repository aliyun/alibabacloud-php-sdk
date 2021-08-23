<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody\outlines;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody\simQuestions;
use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeKnowledgeResponseBody\solutions;
use AlibabaCloud\Tea\Model;

class DescribeKnowledgeResponseBody extends Model
{
    /**
     * @var string
     */
    public $knowledgeTitle;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $coreWords;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var simQuestions[]
     */
    public $simQuestions;

    /**
     * @var solutions[]
     */
    public $solutions;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var int
     */
    public $knowledgeStatus;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var int
     */
    public $knowledgeType;
    protected $_name = [
        'knowledgeTitle'  => 'KnowledgeTitle',
        'categoryId'      => 'CategoryId',
        'modifyTime'      => 'ModifyTime',
        'coreWords'       => 'CoreWords',
        'requestId'       => 'RequestId',
        'createTime'      => 'CreateTime',
        'knowledgeId'     => 'KnowledgeId',
        'keyWords'        => 'KeyWords',
        'endDate'         => 'EndDate',
        'createUserName'  => 'CreateUserName',
        'startDate'       => 'StartDate',
        'simQuestions'    => 'SimQuestions',
        'solutions'       => 'Solutions',
        'version'         => 'Version',
        'modifyUserName'  => 'ModifyUserName',
        'knowledgeStatus' => 'KnowledgeStatus',
        'outlines'        => 'Outlines',
        'knowledgeType'   => 'KnowledgeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeTitle) {
            $res['KnowledgeTitle'] = $this->knowledgeTitle;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->coreWords) {
            $res['CoreWords'] = $this->coreWords;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }
        if (null !== $this->knowledgeStatus) {
            $res['KnowledgeStatus'] = $this->knowledgeStatus;
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
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKnowledgeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeTitle'])) {
            $model->knowledgeTitle = $map['KnowledgeTitle'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['CoreWords'])) {
            if (!empty($map['CoreWords'])) {
                $model->coreWords = $map['CoreWords'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }
        if (isset($map['KnowledgeStatus'])) {
            $model->knowledgeStatus = $map['KnowledgeStatus'];
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
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
        }

        return $model;
    }
}
