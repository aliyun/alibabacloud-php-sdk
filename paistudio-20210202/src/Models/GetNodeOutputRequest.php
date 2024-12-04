<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetNodeOutputRequest extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $outputIndex;
    protected $_name = [
        'outputIndex' => 'OutputIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputIndex) {
            $res['OutputIndex'] = $this->outputIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputIndex'])) {
            $model->outputIndex = $map['OutputIndex'];
        }

        return $model;
    }
}
