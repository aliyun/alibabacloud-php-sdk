<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkitemCommentRequest extends Model
{
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
    public $parentId;
    /**
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'content'            => 'content',
        'formatType'         => 'formatType',
        'parentId'           => 'parentId',
        'workitemIdentifier' => 'workitemIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->formatType) {
            $res['formatType'] = $this->formatType;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['formatType'])) {
            $model->formatType = $map['formatType'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
