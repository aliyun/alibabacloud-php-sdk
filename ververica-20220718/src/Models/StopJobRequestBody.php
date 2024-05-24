<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class StopJobRequestBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example NONE
     *
     * @var string
     */
    public $stopStrategy;
    protected $_name = [
        'stopStrategy' => 'stopStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stopStrategy) {
            $res['stopStrategy'] = $this->stopStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopJobRequestBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stopStrategy'])) {
            $model->stopStrategy = $map['stopStrategy'];
        }

        return $model;
    }
}
