<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ValidateUploadTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 50
     *
     * @var int
     */
    public $commentCount;

    /**
     * @example 50
     *
     * @var int
     */
    public $dialogueCount;

    /**
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'commentCount' => 'CommentCount',
        'dialogueCount' => 'DialogueCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
