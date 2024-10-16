<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\UpdateDocRequest\docMetadata;
use AlibabaCloud\Tea\Model;

class UpdateDocRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 231001028593
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example {"Splitter":"treeSplitter","ChunkSize":500,"TreePatterns":["^# .*","^## .*","^### .*","^#### .*"],"TitleSource":""}
     *
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $content;

    /**
     * @var docMetadata[]
     */
    public $docMetadata;

    /**
     * @var string
     */
    public $docName;

    /**
     * @example 2023-03-11T23:59:59Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description This parameter is required.
     *
     * @example 30001905617
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
     * @example 2022-05-25T16:28:36Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @var int[]
     */
    public $tagIds;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'categoryId'  => 'CategoryId',
        'config'      => 'Config',
        'content'     => 'Content',
        'docMetadata' => 'DocMetadata',
        'docName'     => 'DocName',
        'endDate'     => 'EndDate',
        'knowledgeId' => 'KnowledgeId',
        'meta'        => 'Meta',
        'startDate'   => 'StartDate',
        'tagIds'      => 'TagIds',
        'title'       => 'Title',
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
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->tagIds) {
            $res['TagIds'] = $this->tagIds;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDocRequest
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['TagIds'])) {
            if (!empty($map['TagIds'])) {
                $model->tagIds = $map['TagIds'];
            }
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
