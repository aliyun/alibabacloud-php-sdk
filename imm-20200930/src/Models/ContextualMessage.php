<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ContextualMessage extends Model
{
    /**
     * @example 你好
     *
     * @var string
     */
    public $content;

    /**
     * @var ContextualFile[]
     */
    public $files;

    /**
     * @example user
     *
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'Content',
        'files'   => 'Files',
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
        if (null !== $this->files) {
            $res['Files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['Files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContextualMessage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Files'])) {
            if (!empty($map['Files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['Files'] as $item) {
                    $model->files[$n++] = null !== $item ? ContextualFile::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
