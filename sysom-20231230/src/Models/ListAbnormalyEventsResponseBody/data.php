<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody;

use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data\opts;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1725801090000
     *
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $diagStatus;

    /**
     * @var int
     */
    public $endAt;

    /**
     * @example i-wz9d00ut2ska3mlyhn6j
     *
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var opts[]
     */
    public $opts;

    /**
     * @var string
     */
    public $pod;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example saturation
     *
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'createdAt' => 'created_at',
        'description' => 'description',
        'diagStatus' => 'diag_status',
        'endAt' => 'end_at',
        'instance' => 'instance',
        'item' => 'item',
        'level' => 'level',
        'namespace' => 'namespace',
        'opts' => 'opts',
        'pod' => 'pod',
        'regionId' => 'region_id',
        'type' => 'type',
        'uuid' => 'uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->diagStatus) {
            $res['diag_status'] = $this->diagStatus;
        }
        if (null !== $this->endAt) {
            $res['end_at'] = $this->endAt;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->item) {
            $res['item'] = $this->item;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->opts) {
            $res['opts'] = [];
            if (null !== $this->opts && \is_array($this->opts)) {
                $n = 0;
                foreach ($this->opts as $item) {
                    $res['opts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pod) {
            $res['pod'] = $this->pod;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['diag_status'])) {
            $model->diagStatus = $map['diag_status'];
        }
        if (isset($map['end_at'])) {
            $model->endAt = $map['end_at'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['item'])) {
            $model->item = $map['item'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['opts'])) {
            if (!empty($map['opts'])) {
                $model->opts = [];
                $n = 0;
                foreach ($map['opts'] as $item) {
                    $model->opts[$n++] = null !== $item ? opts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['pod'])) {
            $model->pod = $map['pod'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
