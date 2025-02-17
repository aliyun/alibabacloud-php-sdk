<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries\forwardTableEntry;

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
        if (\is_array($this->forwardTableEntry)) {
            Model::validateArray($this->forwardTableEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardTableEntry) {
            if (\is_array($this->forwardTableEntry)) {
                $res['ForwardTableEntry'] = [];
                $n1                       = 0;
                foreach ($this->forwardTableEntry as $item1) {
                    $res['ForwardTableEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ForwardTableEntry'])) {
            if (!empty($map['ForwardTableEntry'])) {
                $model->forwardTableEntry = [];
                $n1                       = 0;
                foreach ($map['ForwardTableEntry'] as $item1) {
                    $model->forwardTableEntry[$n1++] = forwardTableEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
