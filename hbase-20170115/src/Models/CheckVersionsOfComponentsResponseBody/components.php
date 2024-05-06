<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var \AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody\components\components[]
     */
    public $components;
    protected $_name = [
        'components' => 'Components',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = [];
            if (null !== $this->components && \is_array($this->components)) {
                $n = 0;
                foreach ($this->components as $item) {
                    $res['Components'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n                 = 0;
                foreach ($map['Components'] as $item) {
                    $model->components[$n++] = null !== $item ? \AlibabaCloud\SDK\HBase\V20170115\Models\CheckVersionsOfComponentsResponseBody\components\components::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
