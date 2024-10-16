<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docInfo;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docMetadata;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\DescribeDocResponseBody\docTags;
use AlibabaCloud\Tea\Model;

class DescribeDocResponseBody extends Model
{
    /**
     * @example bizcode123
     *
     * @var string
     */
    public $bizCode;

    /**
     * @example 30000049006
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example {"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":"docName"}
     *
     * @var string
     */
    public $config;

    /**
     * @example 2022-04-12T06:30:17Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1111111111
     *
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
     * @example 20
     *
     * @var int
     */
    public $effectStatus;

    /**
     * @example 2023-04-27T06:08:54Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 30001979424
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @example {"code":"xxx"}
     *
     * @var string
     */
    public $meta;

    /**
     * @example 2020-11-25T08:56:55Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example 2222222222
     *
     * @var int
     */
    public $modifyUserId;

    /**
     * @var string
     */
    public $modifyUserName;

    /**
     * @example true
     *
     * @var bool
     */
    public $processCanRetry;

    /**
     * @var string
     */
    public $processMessage;

    /**
     * @example 0
     *
     * @var int
     */
    public $processStatus;

    /**
     * @description Id of the request
     *
     * @example 7F132693-212A-40A9-8A81-11E7694E478B
     *
     * @var string
     */
    public $requestId;

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
        'bizCode'         => 'BizCode',
        'categoryId'      => 'CategoryId',
        'config'          => 'Config',
        'createTime'      => 'CreateTime',
        'createUserId'    => 'CreateUserId',
        'createUserName'  => 'CreateUserName',
        'docInfo'         => 'DocInfo',
        'docMetadata'     => 'DocMetadata',
        'docName'         => 'DocName',
        'docTags'         => 'DocTags',
        'effectStatus'    => 'EffectStatus',
        'endDate'         => 'EndDate',
        'knowledgeId'     => 'KnowledgeId',
        'meta'            => 'Meta',
        'modifyTime'      => 'ModifyTime',
        'modifyUserId'    => 'ModifyUserId',
        'modifyUserName'  => 'ModifyUserName',
        'processCanRetry' => 'ProcessCanRetry',
        'processMessage'  => 'ProcessMessage',
        'processStatus'   => 'ProcessStatus',
        'requestId'       => 'RequestId',
        'startDate'       => 'StartDate',
        'status'          => 'Status',
        'title'           => 'Title',
        'url'             => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['DocInfo'] = null !== $this->docInfo ? $this->docInfo->toMap() : null;
        }
        if (null !== $this->docMetadata) {
            $res['DocMetadata'] = [];
            if (null !== $this->docMetadata && \is_array($this->docMetadata)) {
                $n = 0;
                foreach ($this->docMetadata as $item) {
                    $res['DocMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }
        if (null !== $this->docTags) {
            $res['DocTags'] = [];
            if (null !== $this->docTags && \is_array($this->docTags)) {
                $n = 0;
                foreach ($this->docTags as $item) {
                    $res['DocTags'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDocResponseBody
     */
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
                $n                  = 0;
                foreach ($map['DocMetadata'] as $item) {
                    $model->docMetadata[$n++] = null !== $item ? docMetadata::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }
        if (isset($map['DocTags'])) {
            if (!empty($map['DocTags'])) {
                $model->docTags = [];
                $n              = 0;
                foreach ($map['DocTags'] as $item) {
                    $model->docTags[$n++] = null !== $item ? docTags::fromMap($item) : $item;
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
