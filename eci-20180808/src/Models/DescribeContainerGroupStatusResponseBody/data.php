<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Annotations that are added to the container groups.
     *
     * @example "{\\"tenancy.x-k8s.io/namespace\\":\\"redis\\"}"
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the container group.
     *
     * @example eci-bp1jrgfqqy54kg5hc****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The name of the container group.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace in which the container group resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The status of the container group.
     *
     * @var podStatus
     */
    public $podStatus;

    /**
     * @description The status of the container group.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The universally unique identifier (UUID) of the container group, which is similar to the unique identifier (UID) of the Kubernetes pod in terms of the concept and usage.
     *
     * @example 78ee0657-987g-b8b2-1f507dic4****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'annotations'      => 'Annotations',
        'containerGroupId' => 'ContainerGroupId',
        'name'             => 'Name',
        'namespace'        => 'Namespace',
        'podStatus'        => 'PodStatus',
        'status'           => 'Status',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->podStatus) {
            $res['PodStatus'] = null !== $this->podStatus ? $this->podStatus->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PodStatus'])) {
            $model->podStatus = podStatus::fromMap($map['PodStatus']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
