<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWhiteBaseImageResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $whiteBase;
    protected $_name = [
        'whiteBase' => 'WhiteBase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteBase) {
            $res['WhiteBase'] = $this->whiteBase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteBase'])) {
            $model->whiteBase = $map['WhiteBase'];
        }

        return $model;
    }
}
