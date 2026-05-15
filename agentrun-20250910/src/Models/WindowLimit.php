<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class WindowLimit extends Model
{
    /**
     * @var int
     */
    public $durationSecs;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'durationSecs' => 'durationSecs',
        'limit' => 'limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
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
        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}
