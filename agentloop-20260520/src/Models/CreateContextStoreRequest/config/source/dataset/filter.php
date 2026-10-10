<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\CreateContextStoreRequest\config\source\dataset;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $where;
    protected $_name = [
        'where' => 'where',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->where) {
            $res['where'] = $this->where;
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
        if (isset($map['where'])) {
            $model->where = $map['where'];
        }

        return $model;
    }
}
