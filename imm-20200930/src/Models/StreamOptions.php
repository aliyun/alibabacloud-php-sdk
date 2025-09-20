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

    /**
     * @var bool
     */
    public $needReturnFinalResult;
    protected $_name = [
        'incrementalOutput' => 'IncrementalOutput',
        'needReturnFinalResult' => 'NeedReturnFinalResult',
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

        if (null !== $this->needReturnFinalResult) {
            $res['NeedReturnFinalResult'] = $this->needReturnFinalResult;
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

        if (isset($map['NeedReturnFinalResult'])) {
            $model->needReturnFinalResult = $map['NeedReturnFinalResult'];
        }

        return $model;
    }
}
