<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docInfo;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docMetadata;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docTags;

class DescribeDocResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizCode;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var string
     */
    public $createUserName;

    /**
     * @var docInfo
     */
    public $docInfo;

    /**
     * @var docMetadata[]
     */
    public $docMetadata;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var docTags[]
     */
    public $docTags;

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
    public $meta;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @var bool
     */
    public $processCanRetry;

    /**
     * @var string
     */
    public $processMessage;

    /**
     * @var int
     */
    public $processStatus;

    /**
     * @var string
     */
    public $requestId;

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

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'bizCode' => 'BizCode',
        'categoryId' => 'CategoryId',
        'config' => 'Config',
        'createTime' => 'CreateTime',
        'createUserId' => 'CreateUserId',
        'createUserName' => 'CreateUserName',
        'docInfo' => 'DocInfo',
        'docMetadata' => 'DocMetadata',
        'docName' => 'DocName',
        'docTags' => 'DocTags',
        'effectStatus' => 'EffectStatus',
        'endDate' => 'EndDate',
        'knowledgeId' => 'KnowledgeId',
        'meta' => 'Meta',
        'modifyTime' => 'ModifyTime',
        'modifyUserId' => 'ModifyUserId',
        'modifyUserName' => 'ModifyUserName',
        'processCanRetry' => 'ProcessCanRetry',
        'processMessage' => 'ProcessMessage',
        'processStatus' => 'ProcessStatus',
        'requestId' => 'RequestId',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (null !== $this->docInfo) {
            $this->docInfo->validate();
        }
        if (\is_array($this->docMetadata)) {
            Model::validateArray($this->docMetadata);
        }
        if (\is_array($this->docTags)) {
            Model::validateArray($this->docTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }

        if (null !== $this->createUserName) {
            $res['CreateUserName'] = $this->createUserName;
        }

        if (null !== $this->docInfo) {
            $res['DocInfo'] = null !== $this->docInfo ? $this->docInfo->toArray($noStream) : $this->docInfo;
        }

        if (null !== $this->docMetadata) {
            if (\is_array($this->docMetadata)) {
                $res['DocMetadata'] = [];
                $n1 = 0;
                foreach ($this->docMetadata as $item1) {
                    $res['DocMetadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->docTags) {
            if (\is_array($this->docTags)) {
                $res['DocTags'] = [];
                $n1 = 0;
                foreach ($this->docTags as $item1) {
                    $res['DocTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUserId) {
            $res['ModifyUserId'] = $this->modifyUserId;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->processCanRetry) {
            $res['ProcessCanRetry'] = $this->processCanRetry;
        }

        if (null !== $this->processMessage) {
            $res['ProcessMessage'] = $this->processMessage;
        }

        if (null !== $this->processStatus) {
            $res['ProcessStatus'] = $this->processStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        if (isset($map['CreateUserName'])) {
            $model->createUserName = $map['CreateUserName'];
        }

        if (isset($map['DocInfo'])) {
            $model->docInfo = docInfo::fromMap($map['DocInfo']);
        }

        if (isset($map['DocMetadata'])) {
            if (!empty($map['DocMetadata'])) {
                $model->docMetadata = [];
                $n1 = 0;
                foreach ($map['DocMetadata'] as $item1) {
                    $model->docMetadata[$n1] = docMetadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['DocTags'])) {
            if (!empty($map['DocTags'])) {
                $model->docTags = [];
                $n1 = 0;
                foreach ($map['DocTags'] as $item1) {
                    $model->docTags[$n1] = docTags::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUserId'])) {
            $model->modifyUserId = $map['ModifyUserId'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['ProcessCanRetry'])) {
            $model->processCanRetry = $map['ProcessCanRetry'];
        }

        if (isset($map['ProcessMessage'])) {
            $model->processMessage = $map['ProcessMessage'];
        }

        if (isset($map['ProcessStatus'])) {
            $model->processStatus = $map['ProcessStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
