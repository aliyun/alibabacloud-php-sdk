<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Answer extends Model
{
    /**
     * @example 你好
     *
     * @var string
     */
    public $content;

    /**
     * @var ReferenceFile[]
     */
    public $references;
    protected $_name = [
        'content'    => 'Content',
        'references' => 'References',
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
        if (null !== $this->references) {
            $res['References'] = [];
            if (null !== $this->references && \is_array($this->references)) {
                $n = 0;
                foreach ($this->references as $item) {
                    $res['References'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Answer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['References'])) {
            if (!empty($map['References'])) {
                $model->references = [];
                $n                 = 0;
                foreach ($map['References'] as $item) {
                    $model->references[$n++] = null !== $item ? ReferenceFile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
