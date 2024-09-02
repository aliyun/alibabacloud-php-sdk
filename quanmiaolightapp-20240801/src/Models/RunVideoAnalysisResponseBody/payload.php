<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;
use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @var output
     */
    public $output;
    protected $_name = [
        'output' => 'output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['output'] = null !== $this->output ? $this->output->toMap() : null;
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

        return $model;
    }
}
