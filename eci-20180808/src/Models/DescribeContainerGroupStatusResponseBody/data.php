<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupStatusResponseBody\data\podStatus;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The annotations of the elastic container instance.
     *
     * @example "{\"tenancy.x-k8s.io/namespace\":\"redis\"}"
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The ID of the elastic container instance.
     *
     * @example eci-bp1jrgfqqy54kg5hc****
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description The name of the elastic container instance.
     *
     * @example nginx
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace where the elastic container instance resides.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The state information about the elastic container instance.
     *
     * @var podStatus
     */
    public $podStatus;

    /**
     * @description The state of the elastic container instance.
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the elastic container instance. The UUID of an elastic container instance is similar to the UID of a Kubernetes pod in concept and usage.
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
