<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeMOTokenUsageSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class summary extends Model
{
    /**
     * @var float
     */
    public $cacheTokens;

    /**
     * @var float
     */
    public $inputTokens;

    /**
     * @var float
     */
    public $outputTokens;

    /**
     * @var float
     */
    public $totalTokens;
    protected $_name = [
        'cacheTokens' => 'CacheTokens',
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheTokens) {
            $res['CacheTokens'] = $this->cacheTokens;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
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
        if (isset($map['CacheTokens'])) {
            $model->cacheTokens = $map['CacheTokens'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}
