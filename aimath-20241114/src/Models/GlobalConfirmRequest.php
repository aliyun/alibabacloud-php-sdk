<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class GlobalConfirmRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Ex_pop_1731848070815_funI
     *
     * @var string
     */
    public $exerciseCode;

    /**
     * @example 2024-11-18
     *
     * @var string
     */
    public $tag;
    protected $_name = [
        'exerciseCode' => 'ExerciseCode',
        'tag'          => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exerciseCode) {
            $res['ExerciseCode'] = $this->exerciseCode;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GlobalConfirmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExerciseCode'])) {
            $model->exerciseCode = $map['ExerciseCode'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        return $model;
    }
}
