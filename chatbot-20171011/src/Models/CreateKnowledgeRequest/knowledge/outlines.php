<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\CreateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @example 30001905617
     *
     * @var int
     */
    public $knowledgeId;

    /**
     * @example 30001979424
     *
     * @var int
     */
    public $outlineId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'outlineId'   => 'OutlineId',
        'title'       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outlines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
