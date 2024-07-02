<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantReadableScnResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The maximum readable timestamp.
     *
     * @example 1715329164977
     *
     * @var int
     */
    public $readableScn;
    protected $_name = [
        'readableScn' => 'ReadableScn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readableScn) {
            $res['ReadableScn'] = $this->readableScn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadableScn'])) {
            $model->readableScn = $map['ReadableScn'];
        }

        return $model;
    }
}
