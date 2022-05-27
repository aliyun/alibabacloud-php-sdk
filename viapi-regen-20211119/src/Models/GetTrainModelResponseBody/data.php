<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\GetTrainModelResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $simpleEvaluate;
    protected $_name = [
        'simpleEvaluate' => 'SimpleEvaluate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleEvaluate) {
            $res['SimpleEvaluate'] = $this->simpleEvaluate;
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
        if (isset($map['SimpleEvaluate'])) {
            $model->simpleEvaluate = $map['SimpleEvaluate'];
        }

        return $model;
    }
}
