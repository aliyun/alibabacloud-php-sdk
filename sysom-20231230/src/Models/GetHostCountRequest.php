<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GetHostCountRequest extends Model
{
    /**
     * @example 1808078950770264
     *
     * @var string
     */
    public $cluster;

    /**
     * @example 1725801327754
     *
     * @var float
     */
    public $end;

    /**
     * @example i-wz9d00ut2ska3mlyhn6j
     *
     * @var string
     */
    public $instance;

    /**
     * @example 1725797727754
     *
     * @var float
     */
    public $start;
    protected $_name = [
        'cluster' => 'cluster',
        'end' => 'end',
        'instance' => 'instance',
        'start' => 'start',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHostCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
