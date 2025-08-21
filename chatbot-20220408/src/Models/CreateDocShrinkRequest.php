<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class CreateDocShrinkRequest extends Model
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
    public $config;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $docMetadataShrink;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $meta;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $tagIdsShrink;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'categoryId' => 'CategoryId',
        'config' => 'Config',
        'content' => 'Content',
        'docMetadataShrink' => 'DocMetadata',
        'endDate' => 'EndDate',
        'meta' => 'Meta',
        'startDate' => 'StartDate',
        'tagIdsShrink' => 'TagIds',
        'title' => 'Title',
        'url' => 'Url',
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

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->docMetadataShrink) {
            $res['DocMetadata'] = $this->docMetadataShrink;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
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
            $model->docMetadataShrink = $map['DocMetadata'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Meta'])) {
            $model->meta = $map['Meta'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
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
