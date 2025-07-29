<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody\payload\output;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunStyleWritingResponseBody\payload\usage;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var output
     */
    public $output;

    /**
     * @example {
     * "inputTokens": 1816,
     * "outputTokens": 96,
     * "totalTokens": 1912
     * }
     *
     * @var usage
     */
    public $usage;
    protected $_name = [
        'output' => 'output',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            $model->output = output::fromMap($map['output']);
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
