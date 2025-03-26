<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class Personalizedtxt2imgQueryInferenceJobInfoRequest extends Model
{
    /**
     * @var string
     */
    public $inferenceJobId;
    protected $_name = [
        'inferenceJobId' => 'inferenceJobId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inferenceJobId) {
            $res['inferenceJobId'] = $this->inferenceJobId;
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
        if (isset($map['inferenceJobId'])) {
            $model->inferenceJobId = $map['inferenceJobId'];
        }

        return $model;
    }
}
