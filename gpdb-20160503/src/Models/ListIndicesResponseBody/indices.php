<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class indices extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices\indices[]
     */
    public $indices;
    protected $_name = [
        'indices' => 'Indices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indices) {
            $res['Indices'] = [];
            if (null !== $this->indices && \is_array($this->indices)) {
                $n = 0;
                foreach ($this->indices as $item) {
                    $res['Indices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = [];
                $n              = 0;
                foreach ($map['Indices'] as $item) {
                    $model->indices[$n++] = null !== $item ? \AlibabaCloud\SDK\Gpdb\V20160503\Models\ListIndicesResponseBody\indices\indices::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
