<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\structView\parts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages\content\structView\parts\referencePart\references;

class referencePart extends Model
{
    /**
     * @var references[]
     */
    public $references;
    protected $_name = [
        'references' => 'references',
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
        if (null !== $this->references) {
            if (\is_array($this->references)) {
                $res['references'] = [];
                $n1 = 0;
                foreach ($this->references as $item1) {
                    $res['references'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['references'])) {
            if (!empty($map['references'])) {
                $model->references = [];
                $n1 = 0;
                foreach ($map['references'] as $item1) {
                    $model->references[$n1] = references::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
