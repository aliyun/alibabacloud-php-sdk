<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkitemCommentRequest extends Model
{
    /**
     * @example 1964584
     *
     * @var int
     */
    public $commentId;

    /**
     * @var string
     */
    public $content;

    /**
     * @example MARKDOWN/RICHTEXT
     *
     * @var string
     */
    public $formatType;

    /**
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'commentId'          => 'commentId',
        'content'            => 'content',
        'formatType'         => 'formatType',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentId) {
            $res['commentId'] = $this->commentId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->formatType) {
            $res['formatType'] = $this->formatType;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkitemCommentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commentId'])) {
            $model->commentId = $map['commentId'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['formatType'])) {
            $model->formatType = $map['formatType'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
