<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceHealthRequest extends Model
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
     * @var int
     */
    public $pageSize;

    /**
     * @var float
     */
    public $start;
    protected $_name = [
        'cluster' => 'cluster',
        'current' => 'current',
        'end' => 'end',
        'instance' => 'instance',
        'pageSize' => 'pageSize',
        'start' => 'start',
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

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        return $model;
    }
}
