<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetHotspotPidListRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

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

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'begEnd' => 'beg_end',
        'begStart' => 'beg_start',
        'instance' => 'instance',
        'table' => 'table',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

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

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

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

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
