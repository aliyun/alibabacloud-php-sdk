<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListAbnormalyEventsResponseBody\data\opts;

class data extends Model
{
    /**
     * @var float
     */
    public $createdAt;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $instance;
    /**
     * @var string
     */
    public $item;
    /**
     * @var opts
     */
    public $opts;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'createdAt'   => 'created_at',
        'description' => 'description',
        'id'          => 'id',
        'instance'    => 'instance',
        'item'        => 'item',
        'opts'        => 'opts',
        'regionId'    => 'region_id',
        'type'        => 'type',
    ];

    public function validate()
    {
        if (null !== $this->opts) {
            $this->opts->validate();
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->item) {
            $res['item'] = $this->item;
        }

        if (null !== $this->opts) {
            $res['opts'] = null !== $this->opts ? $this->opts->toArray($noStream) : $this->opts;
        }

        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['item'])) {
            $model->item = $map['item'];
        }

        if (isset($map['opts'])) {
            $model->opts = opts::fromMap($map['opts']);
        }

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
