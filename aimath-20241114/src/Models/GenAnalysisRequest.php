<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Tea\Model;

class GenAnalysisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $exerciseContent;
    protected $_name = [
        'exerciseContent' => 'ExerciseContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exerciseContent) {
            $res['ExerciseContent'] = $this->exerciseContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExerciseContent'])) {
            $model->exerciseContent = $map['ExerciseContent'];
        }

        return $model;
    }
}
