<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class GenStepRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example Ex_pop_1731848070815_funI
     *
     * @var string
     */
    public $exerciseCode;
    protected $_name = [
        'exerciseCode' => 'ExerciseCode',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenStepRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExerciseCode'])) {
            $model->exerciseCode = $map['ExerciseCode'];
        }

        return $model;
    }
}
