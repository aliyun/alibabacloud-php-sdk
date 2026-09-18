<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ModifyMessagesFeedbacksRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $rating;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'content' => 'Content',
        'messageId' => 'MessageId',
        'rating' => 'Rating',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->rating) {
            $res['Rating'] = $this->rating;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Rating'])) {
            $model->rating = $map['Rating'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
