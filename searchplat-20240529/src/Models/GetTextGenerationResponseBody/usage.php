<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetTextGenerationResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'inputTokens'  => 'input_tokens',
        'outputTokens' => 'output_tokens',
        'totalTokens'  => 'total_tokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['input_tokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['output_tokens'] = $this->outputTokens;
        }
        if (null !== $this->totalTokens) {
            $res['total_tokens'] = $this->totalTokens;
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
        if (isset($map['input_tokens'])) {
            $model->inputTokens = $map['input_tokens'];
        }
        if (isset($map['output_tokens'])) {
            $model->outputTokens = $map['output_tokens'];
        }
        if (isset($map['total_tokens'])) {
            $model->totalTokens = $map['total_tokens'];
        }

        return $model;
    }
}
