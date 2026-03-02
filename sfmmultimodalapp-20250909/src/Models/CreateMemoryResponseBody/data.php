<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\CreateMemoryResponseBody\data\memoryNodes;

class data extends Model
{
    /**
     * @var memoryNodes[]
     */
    public $memoryNodes;
    protected $_name = [
        'memoryNodes' => 'MemoryNodes',
    ];

    public function validate()
    {
        if (\is_array($this->memoryNodes)) {
            Model::validateArray($this->memoryNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryNodes) {
            if (\is_array($this->memoryNodes)) {
                $res['MemoryNodes'] = [];
                $n1 = 0;
                foreach ($this->memoryNodes as $item1) {
                    $res['MemoryNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MemoryNodes'])) {
            if (!empty($map['MemoryNodes'])) {
                $model->memoryNodes = [];
                $n1 = 0;
                foreach ($map['MemoryNodes'] as $item1) {
                    $model->memoryNodes[$n1] = memoryNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
