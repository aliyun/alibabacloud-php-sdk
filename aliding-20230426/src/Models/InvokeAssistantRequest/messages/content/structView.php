<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content;

use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\structView\parts;
use AlibabaCloud\Tea\Model;

class structView extends Model
{
    /**
     * @var parts[]
     */
    public $parts;
    protected $_name = [
        'parts' => 'parts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->parts) {
            $res['parts'] = [];
            if (null !== $this->parts && \is_array($this->parts)) {
                $n = 0;
                foreach ($this->parts as $item) {
                    $res['parts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structView
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['parts'])) {
            if (!empty($map['parts'])) {
                $model->parts = [];
                $n = 0;
                foreach ($map['parts'] as $item) {
                    $model->parts[$n++] = null !== $item ? parts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
