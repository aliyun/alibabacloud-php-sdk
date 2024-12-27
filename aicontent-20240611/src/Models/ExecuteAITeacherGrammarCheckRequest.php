<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class ExecuteAITeacherGrammarCheckRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example i is good
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example 886eba3702xxxxxxxxx4ba52a87a525
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'content' => 'content',
        'userId'  => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteAITeacherGrammarCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
