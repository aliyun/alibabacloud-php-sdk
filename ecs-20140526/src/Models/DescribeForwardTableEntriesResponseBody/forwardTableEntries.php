<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries\forwardTableEntry;
use AlibabaCloud\Tea\Model;

class forwardTableEntries extends Model
{
    /**
     * @var forwardTableEntry[]
     */
    public $forwardTableEntry;
    protected $_name = [
        'forwardTableEntry' => 'ForwardTableEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableEntry) {
            $res['ForwardTableEntry'] = [];
            if (null !== $this->forwardTableEntry && \is_array($this->forwardTableEntry)) {
                $n = 0;
                foreach ($this->forwardTableEntry as $item) {
                    $res['ForwardTableEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTableEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableEntry'])) {
            if (!empty($map['ForwardTableEntry'])) {
                $model->forwardTableEntry = [];
                $n                        = 0;
                foreach ($map['ForwardTableEntry'] as $item) {
                    $model->forwardTableEntry[$n++] = null !== $item ? forwardTableEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
