<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetAgentTaskResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var string
     */
    public $inputTokens;

    /**
     * @var string
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $totalTokens;

    /**
     * @var string
     */
    public $tymxPlusCount;

    /**
     * @var string
     */
    public $tymxTurboCount;
    protected $_name = [
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'totalTokens' => 'TotalTokens',
        'tymxPlusCount' => 'TymxPlusCount',
        'tymxTurboCount' => 'TymxTurboCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
        }

        if (null !== $this->tymxPlusCount) {
            $res['TymxPlusCount'] = $this->tymxPlusCount;
        }

        if (null !== $this->tymxTurboCount) {
            $res['TymxTurboCount'] = $this->tymxTurboCount;
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
        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        if (isset($map['TymxPlusCount'])) {
            $model->tymxPlusCount = $map['TymxPlusCount'];
        }

        if (isset($map['TymxTurboCount'])) {
            $model->tymxTurboCount = $map['TymxTurboCount'];
        }

        return $model;
    }
}
