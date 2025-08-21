<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\CreateDocRequest\docMetadata;

class CreateDocRequest extends Model
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
     * @var docMetadata[]
     */
    public $docMetadata;

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
     * @var int[]
     */
    public $tagIds;

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
        'docMetadata' => 'DocMetadata',
        'endDate' => 'EndDate',
        'meta' => 'Meta',
        'startDate' => 'StartDate',
        'tagIds' => 'TagIds',
        'title' => 'Title',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->docMetadata)) {
            Model::validateArray($this->docMetadata);
        }
        if (\is_array($this->tagIds)) {
            Model::validateArray($this->tagIds);
        }
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

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->meta) {
            $res['Meta'] = $this->meta;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->tagIds) {
            if (\is_array($this->tagIds)) {
                $res['TagIds'] = [];
                $n1 = 0;
                foreach ($this->tagIds as $item1) {
                    $res['TagIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DocMetadata'])) {
                $model->docMetadata = [];
                $n1 = 0;
                foreach ($map['DocMetadata'] as $item1) {
                    $model->docMetadata[$n1] = docMetadata::fromMap($item1);
                    ++$n1;
                }
            }
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
            if (!empty($map['TagIds'])) {
                $model->tagIds = [];
                $n1 = 0;
                foreach ($map['TagIds'] as $item1) {
                    $model->tagIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
