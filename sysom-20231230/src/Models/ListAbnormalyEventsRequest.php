<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class ListAbnormalyEventsRequest extends Model
{
    /**
     * @example 1808078950770264
     *
     * @var string
     */
    public $cluster;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

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
     * @example potential
     *
     * @var string
     */
    public $level;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example test-pod
     *
     * @var string
     */
    public $pod;

    /**
     * @example 1
     *
     * @var int
     */
    public $showPod;

    /**
     * @example 1725797727754
     *
     * @var float
     */
    public $start;
    protected $_name = [
        'cluster' => 'cluster',
        'current' => 'current',
        'end' => 'end',
        'instance' => 'instance',
        'level' => 'level',
        'namespace' => 'namespace',
        'pageSize' => 'pageSize',
        'pod' => 'pod',
        'showPod' => 'showPod',
        'start' => 'start',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pod) {
            $res['pod'] = $this->pod;
        }
        if (null !== $this->showPod) {
            $res['showPod'] = $this->showPod;
        }
        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAbnormalyEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pod'])) {
            $model->pod = $map['pod'];
        }
        if (isset($map['showPod'])) {
            $model->showPod = $map['showPod'];
        }
        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
