<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\taskSpec\taskExecutor\VM;

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
        if (null !== $this->VM) {
            $this->VM->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->VM) {
            $res['VM'] = null !== $this->VM ? $this->VM->toArray($noStream) : $this->VM;
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
        if (isset($map['VM'])) {
            $model->VM = VM::fromMap($map['VM']);
        }

        return $model;
    }
}
