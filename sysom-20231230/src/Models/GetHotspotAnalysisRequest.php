<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetHotspotAnalysisRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example GR
     *
     * @var string
     */
    public $appType;

    /**
     * @description This parameter is required.
     *
     * @example 1725413948000
     *
     * @var int
     */
    public $begEnd;

    /**
     * @description This parameter is required.
     *
     * @example 1725410348000
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
     * @example 1657494
     *
     * @var int
     */
    public $pid;

    /**
     * @example prof_on
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'appType' => 'appType',
        'begEnd' => 'beg_end',
        'begStart' => 'beg_start',
        'instance' => 'instance',
        'pid' => 'pid',
        'table' => 'table',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['appType'] = $this->appType;
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
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotspotAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appType'])) {
            $model->appType = $map['appType'];
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
        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        return $model;
    }
}
