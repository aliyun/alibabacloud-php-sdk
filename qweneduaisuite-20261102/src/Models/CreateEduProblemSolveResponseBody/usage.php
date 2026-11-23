<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\CreateEduProblemSolveResponseBody;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $promptTokens;
    protected $_name = [
        'completionTokens' => 'completionTokens',
        'promptTokens' => 'promptTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTokens) {
            $res['completionTokens'] = $this->completionTokens;
        }

        if (null !== $this->promptTokens) {
            $res['promptTokens'] = $this->promptTokens;
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
        if (isset($map['completionTokens'])) {
            $model->completionTokens = $map['completionTokens'];
        }

        if (isset($map['promptTokens'])) {
            $model->promptTokens = $map['promptTokens'];
        }

        return $model;
    }
}
