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
     * @example 1000053274
     *
     * @var int
     */
    public $categoryId;

    /**
     * @var string[]
     */
    public $coreWords;

    /**
     * @example 2020-11-25T11:44:09Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @example 2020-11-26T11:56:40Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string[]
     */
    public $keyWords;

    /**
     * @description FAQ ID
     *
     * @example 30001979424
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @example 3
     *
     * @var int
     */
    public $knowledgeStatus;

    /**
     * @var string
     */
    public $knowledgeTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $knowledgeType;

    /**
     * @example 2020-11-26T06:36:14Z
     *
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
     * @example F7F60925-E0ED-50DA-9E0B-ED4B3ECFBA4F
     *
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
     * @example 1979-12-31T16:00:00Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'categoryId'      => 'CategoryId',
        'coreWords'       => 'CoreWords',
        'createTime'      => 'CreateTime',
        'createUserName'  => 'CreateUserName',
        'endDate'         => 'EndDate',
        'keyWords'        => 'KeyWords',
        'knowledgeId'     => 'KnowledgeId',
        'knowledgeStatus' => 'KnowledgeStatus',
        'knowledgeTitle'  => 'KnowledgeTitle',
        'knowledgeType'   => 'KnowledgeType',
        'modifyTime'      => 'ModifyTime',
        'modifyUserName'  => 'ModifyUserName',
        'outlines'        => 'Outlines',
        'requestId'       => 'RequestId',
        'simQuestions'    => 'SimQuestions',
        'solutions'       => 'Solutions',
        'startDate'       => 'StartDate',
        'version'         => 'Version',
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
        if (null !== $this->coreWords) {
            $res['CoreWords'] = $this->coreWords;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->keyWords) {
            $res['KeyWords'] = $this->keyWords;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->knowledgeStatus) {
            $res['KnowledgeStatus'] = $this->knowledgeStatus;
        }
        if (null !== $this->knowledgeTitle) {
            $res['KnowledgeTitle'] = $this->knowledgeTitle;
        }
        if (null !== $this->knowledgeType) {
            $res['KnowledgeType'] = $this->knowledgeType;
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
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CoreWords'])) {
            if (!empty($map['CoreWords'])) {
                $model->coreWords = $map['CoreWords'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['KeyWords'])) {
            if (!empty($map['KeyWords'])) {
                $model->keyWords = $map['KeyWords'];
            }
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['KnowledgeStatus'])) {
            $model->knowledgeStatus = $map['KnowledgeStatus'];
        }
        if (isset($map['KnowledgeTitle'])) {
            $model->knowledgeTitle = $map['KnowledgeTitle'];
        }
        if (isset($map['KnowledgeType'])) {
            $model->knowledgeType = $map['KnowledgeType'];
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
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
