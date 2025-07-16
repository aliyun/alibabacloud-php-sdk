<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\structView\parts;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\structView\parts\referencePart\references;
use AlibabaCloud\Tea\Model;

class referencePart extends Model
{
    /**
     * @var references[]
     */
    public $references;
    protected $_name = [
        'references' => 'references',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->references) {
            $res['references'] = [];
            if (null !== $this->references && \is_array($this->references)) {
                $n = 0;
                foreach ($this->references as $item) {
                    $res['references'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referencePart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['references'])) {
            if (!empty($map['references'])) {
                $model->references = [];
                $n = 0;
                foreach ($map['references'] as $item) {
                    $model->references[$n++] = null !== $item ? references::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
