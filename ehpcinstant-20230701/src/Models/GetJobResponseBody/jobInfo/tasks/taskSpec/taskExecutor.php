<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\taskExecutor\VM;
use AlibabaCloud\Tea\Model;

class taskExecutor extends Model
{
    /**
     * @var VM
     */
    public $VM;
    protected $_name = [
        'VM' => 'VM',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VM) {
            $res['VM'] = null !== $this->VM ? $this->VM->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskExecutor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VM'])) {
            $model->VM = VM::fromMap($map['VM']);
        }

        return $model;
    }
}
