<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class PausePipelineRequest extends Model
{
    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'reason' => 'reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
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
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        return $model;
    }
}
