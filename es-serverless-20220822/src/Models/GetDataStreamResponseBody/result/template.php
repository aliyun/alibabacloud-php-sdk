<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20220822\Models\GetDataStreamResponseBody\result;

use AlibabaCloud\SDK\Esserverless\V20220822\Models\DataStreamMapping;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description 索引字段设置
     *
     * @var DataStreamMapping[]
     */
    public $mappings;
    protected $_name = [
        'mappings' => 'mappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mappings) {
            $res['mappings'] = [];
            if (null !== $this->mappings && \is_array($this->mappings)) {
                $n = 0;
                foreach ($this->mappings as $item) {
                    $res['mappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mappings'])) {
            if (!empty($map['mappings'])) {
                $model->mappings = [];
                $n               = 0;
                foreach ($map['mappings'] as $item) {
                    $model->mappings[$n++] = null !== $item ? DataStreamMapping::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
