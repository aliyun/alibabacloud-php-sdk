<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListDeliveryInstanceChangeRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class envNodeInfo extends Model
{
    /**
     * @example 1530
     *
     * @var string
     */
    public $capacity;

    /**
     * @example 64
     *
     * @var string
     */
    public $cpu;

    /**
     * @example master
     *
     * @var string
     */
    public $identifier;

    /**
     * @var mixed[]
     */
    public $label;

    /**
     * @example 128
     *
     * @var string
     */
    public $memory;

    /**
     * @example qimr
     *
     * @var string
     */
    public $name;

    /**
     * @example 192.168.0.1
     *
     * @var string
     */
    public $privateIP;

    /**
     * @var mixed[]
     */
    public $taints;
    protected $_name = [
        'capacity'   => 'capacity',
        'cpu'        => 'cpu',
        'identifier' => 'identifier',
        'label'      => 'label',
        'memory'     => 'memory',
        'name'       => 'name',
        'privateIP'  => 'privateIP',
        'taints'     => 'taints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['capacity'] = $this->capacity;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->privateIP) {
            $res['privateIP'] = $this->privateIP;
        }
        if (null !== $this->taints) {
            $res['taints'] = $this->taints;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envNodeInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capacity'])) {
            $model->capacity = $map['capacity'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['privateIP'])) {
            $model->privateIP = $map['privateIP'];
        }
        if (isset($map['taints'])) {
            $model->taints = $map['taints'];
        }

        return $model;
    }
}
