<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListAbnormalyEventsRequest extends Model
{
    /**
     * @var string
     */
    public $cluster;
    /**
     * @var int
     */
    public $current;
    /**
     * @var float
     */
    public $end;
    /**
     * @var string
     */
    public $instance;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $pod;
    /**
     * @var int
     */
    public $showPod;
    /**
     * @var float
     */
    public $start;
    protected $_name = [
        'cluster'   => 'cluster',
        'current'   => 'current',
        'end'       => 'end',
        'instance'  => 'instance',
        'level'     => 'level',
        'namespace' => 'namespace',
        'pageSize'  => 'pageSize',
        'pod'       => 'pod',
        'showPod'   => 'showPod',
        'start'     => 'start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
