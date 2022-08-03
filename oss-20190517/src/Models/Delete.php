<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class Delete extends Model
{
    /**
     * @var ObjectIdentifier[]
     */
    public $objects;

    /**
     * @var bool
     */
    public $quiet;
    protected $_name = [
        'objects' => 'Object',
        'quiet'   => 'Quiet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objects) {
            $res['Object'] = [];
            if (null !== $this->objects && \is_array($this->objects)) {
                $n = 0;
                foreach ($this->objects as $item) {
                    $res['Object'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quiet) {
            $res['Quiet'] = $this->quiet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Delete
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Object'])) {
            if (!empty($map['Object'])) {
                $model->objects = [];
                $n              = 0;
                foreach ($map['Object'] as $item) {
                    $model->objects[$n++] = null !== $item ? ObjectIdentifier::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Quiet'])) {
            $model->quiet = $map['Quiet'];
        }

        return $model;
    }
}
