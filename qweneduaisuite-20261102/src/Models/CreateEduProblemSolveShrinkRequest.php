<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models;

use AlibabaCloud\Dara\Model;

class CreateEduProblemSolveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $queryShrink;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryShrink' => 'query',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->queryShrink) {
            $res['query'] = $this->queryShrink;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['query'])) {
            $model->queryShrink = $map['query'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
