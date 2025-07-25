<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2ResponseBody\payload;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 78
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 34
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @var int[]
     */
    public $tokenMap;

    /**
     * @example 38
     *
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'tokenMap' => 'TokenMap',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }
        if (null !== $this->tokenMap) {
            $res['TokenMap'] = $this->tokenMap;
        }
        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }
        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }
        if (isset($map['TokenMap'])) {
            $model->tokenMap = $map['TokenMap'];
        }
        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
