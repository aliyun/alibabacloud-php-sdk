<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class StreamOptions extends Model
{
    /**
     * @var bool
     */
    public $incrementalOutput;
    protected $_name = [
        'incrementalOutput' => 'IncrementalOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incrementalOutput) {
            $res['IncrementalOutput'] = $this->incrementalOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StreamOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IncrementalOutput'])) {
            $model->incrementalOutput = $map['IncrementalOutput'];
        }

        return $model;
    }
}
