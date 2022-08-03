<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CompleteMultipartUpload extends Model
{
    /**
     * @var Part[]
     */
    public $part;
    protected $_name = [
        'part' => 'Part',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->part) {
            $res['Part'] = [];
            if (null !== $this->part && \is_array($this->part)) {
                $n = 0;
                foreach ($this->part as $item) {
                    $res['Part'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteMultipartUpload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Part'])) {
            if (!empty($map['Part'])) {
                $model->part = [];
                $n           = 0;
                foreach ($map['Part'] as $item) {
                    $model->part[$n++] = null !== $item ? Part::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
