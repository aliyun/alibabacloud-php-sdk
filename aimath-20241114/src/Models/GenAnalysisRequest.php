<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIMath\V20241114\Models;

use AlibabaCloud\Dara\Model;

class GenAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $exerciseContent;
    protected $_name = [
        'exerciseContent' => 'ExerciseContent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exerciseContent) {
            $res['ExerciseContent'] = $this->exerciseContent;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExerciseContent'])) {
            $model->exerciseContent = $map['ExerciseContent'];
        }

        return $model;
    }
}
