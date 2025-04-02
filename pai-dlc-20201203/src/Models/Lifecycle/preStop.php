<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\preStop\exec;

class preStop extends Model
{
    /**
     * @var exec
     */
    public $exec;
    protected $_name = [
        'exec' => 'Exec',
    ];

    public function validate()
    {
        if (null !== $this->exec) {
            $this->exec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exec) {
            $res['Exec'] = null !== $this->exec ? $this->exec->toArray($noStream) : $this->exec;
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
        if (isset($map['Exec'])) {
            $model->exec = exec::fromMap($map['Exec']);
        }

        return $model;
    }
}
