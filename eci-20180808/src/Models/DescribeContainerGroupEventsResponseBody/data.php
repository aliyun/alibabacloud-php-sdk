<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupEventsResponseBody\data\events;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The annotations of the elastic container instance.
     *
     * @example "{\\"tenancy.x-k8s.io/namespace\\":\\"redis\\"}"
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-uf6fonnghi50v6nq****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The events.
     *
     * @var events[]
     */
    public $events;

    /**
     * @description The name of the elastic container instance.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace where the elastic container instance resides.
     *
     * @example redis
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The UUID of the elastic container instance.
     *
     * @example 3fc6b309-****-****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'annotations'      => 'Annotations',
        'containerGroupId' => 'ContainerGroupId',
        'events'           => 'Events',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'uuid'             => 'uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->events) {
            $res['Events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['Events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n             = 0;
                foreach ($map['Events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
