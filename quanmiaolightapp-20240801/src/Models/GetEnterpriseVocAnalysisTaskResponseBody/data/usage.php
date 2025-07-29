<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 2
     *
     * @var int
     */
    public $outputTokens;
    protected $_name = [
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
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

        return $model;
    }
}
