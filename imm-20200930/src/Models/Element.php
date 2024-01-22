<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Element extends Model
{
    /**
     * @var ElementContent[]
     */
    public $elementContents;
    protected $_name = [
        'elementContents' => 'ElementContents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elementContents) {
            $res['ElementContents'] = [];
            if (null !== $this->elementContents && \is_array($this->elementContents)) {
                $n = 0;
                foreach ($this->elementContents as $item) {
                    $res['ElementContents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Element
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElementContents'])) {
            if (!empty($map['ElementContents'])) {
                $model->elementContents = [];
                $n                      = 0;
                foreach ($map['ElementContents'] as $item) {
                    $model->elementContents[$n++] = null !== $item ? ElementContent::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
