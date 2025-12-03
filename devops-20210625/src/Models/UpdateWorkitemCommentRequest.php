<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class UpdateWorkitemCommentRequest extends Model
{
    /**
     * @var int
     */
    public $commentId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'commentId' => 'commentId',
        'content' => 'content',
        'formatType' => 'formatType',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
