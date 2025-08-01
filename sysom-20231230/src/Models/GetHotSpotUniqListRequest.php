<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetHotSpotUniqListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1735010351000
     *
     * @var int
     */
    public $begEnd;

    /**
     * @description This parameter is required.
     *
     * @example 1735008551000
     *
     * @var int
     */
    public $begStart;

    /**
     * @description This parameter is required.
     *
     * @example i-bp1g2i0siirefgwnnnvy
     *
     * @var string
     */
    public $instance;

    /**
     * @example 12345
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

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $uniq;
    protected $_name = [
        'begEnd' => 'beg_end',
        'begStart' => 'beg_start',
        'instance' => 'instance',
        'pid' => 'pid',
        'table' => 'table',
        'uniq' => 'uniq',
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
        if (null !== $this->pid) {
            $res['pid'] = $this->pid;
        }
        if (null !== $this->table) {
            $res['table'] = $this->table;
        }
        if (null !== $this->uniq) {
            $res['uniq'] = $this->uniq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotSpotUniqListRequest
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
        if (isset($map['pid'])) {
            $model->pid = $map['pid'];
        }
        if (isset($map['table'])) {
            $model->table = $map['table'];
        }
        if (isset($map['uniq'])) {
            $model->uniq = $map['uniq'];
        }

        return $model;
    }
}
