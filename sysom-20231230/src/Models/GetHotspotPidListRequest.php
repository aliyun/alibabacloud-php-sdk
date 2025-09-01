<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetHotspotPidListRequest extends Model
{
    /**
     * @var int
     */
    public $begEnd;

    /**
     * @var int
     */
    public $begStart;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'begEnd' => 'beg_end',
        'begStart' => 'beg_start',
        'instance' => 'instance',
        'table' => 'table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->begEnd) {
            $res['beg_end'] = $this->begEnd;
        }

        if (null !== $this->begStart) {
            $res['beg_start'] = $this->begStart;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
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
        if (isset($map['beg_end'])) {
            $model->begEnd = $map['beg_end'];
        }

        if (isset($map['beg_start'])) {
            $model->begStart = $map['beg_start'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
