<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class ListBucketsRequest extends Model
{
    /**
     * @example mybucket10
     *
     * @var string
     */
    public $marker;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxKeys;

    /**
     * @example my
     *
     * @var string
     */
    public $prefix;
    protected $_name = [
        'marker'  => 'marker',
        'maxKeys' => 'max-keys',
        'prefix'  => 'prefix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxKeys) {
            $res['max-keys'] = $this->maxKeys;
        }
        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBucketsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['max-keys'])) {
            $model->maxKeys = $map['max-keys'];
        }
        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        return $model;
    }
}
