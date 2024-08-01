<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgQueryInferenceJobInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 180
     *
     * @var string
     */
    public $inferenceJobId;
    protected $_name = [
        'inferenceJobId' => 'inferenceJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inferenceJobId) {
            $res['inferenceJobId'] = $this->inferenceJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgQueryInferenceJobInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['inferenceJobId'])) {
            $model->inferenceJobId = $map['inferenceJobId'];
        }

        return $model;
    }
}
