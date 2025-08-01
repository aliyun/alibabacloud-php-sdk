<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetHotspotPidListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1725413947000
     *
     * @var int
     */
    public $begEnd;

    /**
     * @description This parameter is required.
     *
     * @example 1725413647000
     *
     * @var int
     */
    public $begStart;

    /**
     * @description This parameter is required.
     *
     * @example i-2ze5ru5rjurix7f71sxv
     *
     * @var string
     */
    public $instance;

    /**
     * @description This parameter is required.
     *
     * @example prof_on
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'begEnd' => 'beg_end',
        'begStart' => 'beg_start',
        'instance' => 'instance',
        'table' => 'table',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetHotspotPidListRequest
     */
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
