<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @var content
     */
    public $content;

    /**
     * @example 这是一张小猫钓鱼图
     *
     * @var string
     */
    public $contentDesc;

    /**
     * @example 1642448000000
     *
     * @var int
     */
    public $createAt;

    /**
     * @example user
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'content',
        'contentDesc' => 'contentDesc',
        'createAt' => 'createAt',
        'role' => 'role',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = null !== $this->content ? $this->content->toMap() : null;
        }
        if (null !== $this->contentDesc) {
            $res['contentDesc'] = $this->contentDesc;
        }
        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
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
            $model->content = content::fromMap($map['content']);
        }
        if (isset($map['contentDesc'])) {
            $model->contentDesc = $map['contentDesc'];
        }
        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        return $model;
    }
}
