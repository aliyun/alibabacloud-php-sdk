<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class UpdateMemoryRequest extends Model
{
    /**
     * @var int
     */
    public $longTtl;

    /**
     * @var int
     */
    public $shortTtl;
    protected $_name = [
        'longTtl' => 'longTtl',
        'shortTtl' => 'shortTtl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->longTtl) {
            $res['longTtl'] = $this->longTtl;
        }

        if (null !== $this->shortTtl) {
            $res['shortTtl'] = $this->shortTtl;
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
        if (isset($map['longTtl'])) {
            $model->longTtl = $map['longTtl'];
        }

        if (isset($map['shortTtl'])) {
            $model->shortTtl = $map['shortTtl'];
        }

        return $model;
    }
}
