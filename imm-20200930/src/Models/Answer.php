<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Answer extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var ReferenceFile[]
     */
    public $references;
    protected $_name = [
        'content' => 'Content',
        'references' => 'References',
    ];

    public function validate()
    {
        if (\is_array($this->references)) {
            Model::validateArray($this->references);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->references) {
            if (\is_array($this->references)) {
                $res['References'] = [];
                $n1 = 0;
                foreach ($this->references as $item1) {
                    $res['References'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['References'])) {
            if (!empty($map['References'])) {
                $model->references = [];
                $n1 = 0;
                foreach ($map['References'] as $item1) {
                    $model->references[$n1] = ReferenceFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
