<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ExecuteAITeacherExpansionDialogueRequest;

use AlibabaCloud\Tea\Model;

class roleInfo extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Alex
     *
     * @var string
     */
    public $assistant;

    /**
     * @description This parameter is required.
     *
     * @example Jamie
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'assistant' => 'assistant',
        'user'      => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistant) {
            $res['assistant'] = $this->assistant;
        }
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistant'])) {
            $model->assistant = $map['assistant'];
        }
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
