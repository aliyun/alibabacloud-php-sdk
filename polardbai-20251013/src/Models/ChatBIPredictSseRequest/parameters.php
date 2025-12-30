<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PolardbAI\V20251013\Models\ChatBIPredictSseRequest;

use AlibabaCloud\Dara\Model;

class parameters extends Model
{
    /**
     * @var float
     */
    public $patternIndexThreshold;

    /**
     * @var int
     */
    public $patternIndexTop;

    /**
     * @var string
     */
    public $resultType;
    protected $_name = [
        'patternIndexThreshold' => 'PatternIndexThreshold',
        'patternIndexTop' => 'PatternIndexTop',
        'resultType' => 'ResultType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->patternIndexThreshold) {
            $res['PatternIndexThreshold'] = $this->patternIndexThreshold;
        }

        if (null !== $this->patternIndexTop) {
            $res['PatternIndexTop'] = $this->patternIndexTop;
        }

        if (null !== $this->resultType) {
            $res['ResultType'] = $this->resultType;
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
        if (isset($map['PatternIndexThreshold'])) {
            $model->patternIndexThreshold = $map['PatternIndexThreshold'];
        }

        if (isset($map['PatternIndexTop'])) {
            $model->patternIndexTop = $map['PatternIndexTop'];
        }

        if (isset($map['ResultType'])) {
            $model->resultType = $map['ResultType'];
        }

        return $model;
    }
}
