<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetEmbeddingTuningResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var float[][]
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
            $res['output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['output'])) {
            if (!empty($map['output'])) {
                $model->output = $map['output'];
            }
        }

        return $model;
    }
}
