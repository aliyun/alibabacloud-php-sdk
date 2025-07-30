<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\Lifecycle\preStop\exec;
use AlibabaCloud\Tea\Model;

class preStop extends Model
{
    /**
     * @var exec
     */
    public $exec;
    protected $_name = [
        'exec' => 'Exec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exec) {
            $res['Exec'] = null !== $this->exec ? $this->exec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preStop
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exec'])) {
            $model->exec = exec::fromMap($map['Exec']);
        }

        return $model;
    }
}
