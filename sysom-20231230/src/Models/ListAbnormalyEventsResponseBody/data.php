<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data\opts;

class data extends Model
{
    /**
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
     * @var string
     */
    public $regionId;

    /**
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

    public function validate()
    {
        if (\is_array($this->opts)) {
            Model::validateArray($this->opts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->opts)) {
                $res['opts'] = [];
                $n1 = 0;
                foreach ($this->opts as $item1) {
                    $res['opts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['opts'] as $item1) {
                    $model->opts[$n1++] = opts::fromMap($item1);
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
