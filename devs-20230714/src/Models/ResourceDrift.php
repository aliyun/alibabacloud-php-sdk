<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\SDK\Devs\V20230714\Models\ResourceDrift\change;
use AlibabaCloud\Tea\Model;

class ResourceDrift extends Model
{
    /**
     * @example alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd
     *
     * @var string
     */
    public $address;

    /**
     * @var change
     */
    public $change;

    /**
     * @example managed
     *
     * @var string
     */
    public $mode;

    /**
     * @example cn-shanghai-fc-stable-diffusion-sd
     *
     * @var string
     */
    public $name;

    /**
     * @example alicloud_fc_trigger
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'address',
        'change'  => 'change',
        'mode'    => 'mode',
        'name'    => 'name',
        'type'    => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->change) {
            $res['change'] = null !== $this->change ? $this->change->toMap() : null;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceDrift
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['change'])) {
            $model->change = change::fromMap($map['change']);
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
