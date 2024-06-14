<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionMessageRequest;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example user
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'Content',
        'role'    => 'Role',
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
