<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incrementalOutput) {
            $res['IncrementalOutput'] = $this->incrementalOutput;
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
        if (isset($map['IncrementalOutput'])) {
            $model->incrementalOutput = $map['IncrementalOutput'];
        }

        return $model;
    }
}
