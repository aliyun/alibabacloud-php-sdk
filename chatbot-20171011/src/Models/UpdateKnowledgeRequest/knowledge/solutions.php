<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\UpdateKnowledgeRequest\knowledge;

use AlibabaCloud\Tea\Model;

class solutions extends Model
{
    /**
     * @example ADD
     *
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string[]
     */
    public $perspectiveIds;

    /**
     * @var string
     */
    public $plainText;

    /**
     * @example 30001905617
     *
     * @var int
     */
    public $solutionId;
    protected $_name = [
        'action'         => 'Action',
        'content'        => 'Content',
        'perspectiveIds' => 'PerspectiveIds',
        'plainText'      => 'PlainText',
        'solutionId'     => 'SolutionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->perspectiveIds) {
            $res['PerspectiveIds'] = $this->perspectiveIds;
        }
        if (null !== $this->plainText) {
            $res['PlainText'] = $this->plainText;
        }
        if (null !== $this->solutionId) {
            $res['SolutionId'] = $this->solutionId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['PerspectiveIds'])) {
            if (!empty($map['PerspectiveIds'])) {
                $model->perspectiveIds = $map['PerspectiveIds'];
            }
        }
        if (isset($map['PlainText'])) {
            $model->plainText = $map['PlainText'];
        }
        if (isset($map['SolutionId'])) {
            $model->solutionId = $map['SolutionId'];
        }

        return $model;
    }
}
