<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunMarketingInformationWritingResponseBody\payload;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 100
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @example 200
     *
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'inputTokens'  => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'totalTokens'  => 'totalTokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }
        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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
        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }
        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }
        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}
