<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ValidateUploadTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $commentCount;

    /**
     * @var int
     */
    public $dialogueCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commentCount' => 'CommentCount',
        'dialogueCount' => 'DialogueCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commentCount) {
            $res['CommentCount'] = $this->commentCount;
        }

        if (null !== $this->dialogueCount) {
            $res['DialogueCount'] = $this->dialogueCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CommentCount'])) {
            $model->commentCount = $map['CommentCount'];
        }

        if (isset($map['DialogueCount'])) {
            $model->dialogueCount = $map['DialogueCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
