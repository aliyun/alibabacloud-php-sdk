<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class outlines extends Model
{
    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $outlineId;

    /**
     * @var string
     */
    public $action;
    protected $_name = [
        'knowledgeId' => 'KnowledgeId',
        'title'       => 'Title',
        'outlineId'   => 'OutlineId',
        'action'      => 'Action',
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
