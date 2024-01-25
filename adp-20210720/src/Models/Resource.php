<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\Resource\cpu;
use AlibabaCloud\SDK\Adp\V20210720\Models\Resource\image;
use AlibabaCloud\SDK\Adp\V20210720\Models\Resource\memory;
use AlibabaCloud\SDK\Adp\V20210720\Models\Resource\publicIP;
use AlibabaCloud\SDK\Adp\V20210720\Models\Resource\storage;
use AlibabaCloud\Tea\Model;

class Resource extends Model
{
    /**
     * @var cpu
     */
    public $cpu;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var memory
     */
    public $memory;

    /**
     * @var ExportPort[]
     */
    public $ports;

    /**
     * @var publicIP
     */
    public $publicIP;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var storage[]
     */
    public $storage;
    protected $_name = [
        'cpu'          => 'cpu',
        'hostname'     => 'hostname',
        'identifier'   => 'identifier',
        'image'        => 'image',
        'instanceType' => 'instanceType',
        'memory'       => 'memory',
        'ports'        => 'ports',
        'publicIP'     => 'publicIP',
        'replica'      => 'replica',
        'storage'      => 'storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['cpu'] = null !== $this->cpu ? $this->cpu->toMap() : null;
        }
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->image) {
            $res['image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }
        if (null !== $this->memory) {
            $res['memory'] = null !== $this->memory ? $this->memory->toMap() : null;
        }
        if (null !== $this->ports) {
            $res['ports'] = [];
            if (null !== $this->ports && \is_array($this->ports)) {
                $n = 0;
                foreach ($this->ports as $item) {
                    $res['ports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->publicIP) {
            $res['publicIP'] = null !== $this->publicIP ? $this->publicIP->toMap() : null;
        }
        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }
        if (null !== $this->storage) {
            $res['storage'] = [];
            if (null !== $this->storage && \is_array($this->storage)) {
                $n = 0;
                foreach ($this->storage as $item) {
                    $res['storage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cpu'])) {
            $model->cpu = cpu::fromMap($map['cpu']);
        }
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['image'])) {
            $model->image = image::fromMap($map['image']);
        }
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }
        if (isset($map['memory'])) {
            $model->memory = memory::fromMap($map['memory']);
        }
        if (isset($map['ports'])) {
            if (!empty($map['ports'])) {
                $model->ports = [];
                $n            = 0;
                foreach ($map['ports'] as $item) {
                    $model->ports[$n++] = null !== $item ? ExportPort::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['publicIP'])) {
            $model->publicIP = publicIP::fromMap($map['publicIP']);
        }
        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }
        if (isset($map['storage'])) {
            if (!empty($map['storage'])) {
                $model->storage = [];
                $n              = 0;
                foreach ($map['storage'] as $item) {
                    $model->storage[$n++] = null !== $item ? storage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
