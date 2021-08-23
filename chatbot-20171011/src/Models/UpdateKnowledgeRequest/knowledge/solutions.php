<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $plainText;

    /**
     * @var int
     */
    public $solutionId;

    /**
     * @var string[]
     */
    public $perspectiveIds;

    /**
     * @var string
     */
    public $action;
    protected $_name = [
        'content'        => 'Content',
        'plainText'      => 'PlainText',
        'solutionId'     => 'SolutionId',
        'perspectiveIds' => 'PerspectiveIds',
        'action'         => 'Action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
        }
        if (null !== $this->perspectiveIds) {
            $res['PerspectiveIds'] = $this->perspectiveIds;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }
        if (isset($map['PerspectiveIds'])) {
            if (!empty($map['PerspectiveIds'])) {
                $model->perspectiveIds = $map['PerspectiveIds'];
            }
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
