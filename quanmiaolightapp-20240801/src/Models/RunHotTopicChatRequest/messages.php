<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatRequest;

use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $content;

    /**
     * @example 2024-12-10 18:51:29
     *
     * @var string
     */
    public $createTime;

    /**
     * @example user
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'content'    => 'content',
        'createTime' => 'createTime',
        'role'       => 'role',
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
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
