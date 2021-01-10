<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult\face;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\faceResult\face\celebrities\celebrity;
use AlibabaCloud\Tea\Model;

class celebrities extends Model
{
    /**
     * @var celebrity[]
     */
    public $celebrity;
    protected $_name = [
        'celebrity' => 'Celebrity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->celebrity) {
            $res['Celebrity'] = [];
            if (null !== $this->celebrity && \is_array($this->celebrity)) {
                $n = 0;
                foreach ($this->celebrity as $item) {
                    $res['Celebrity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return celebrities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Celebrity'])) {
            if (!empty($map['Celebrity'])) {
                $model->celebrity = [];
                $n                = 0;
                foreach ($map['Celebrity'] as $item) {
                    $model->celebrity[$n++] = null !== $item ? celebrity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
