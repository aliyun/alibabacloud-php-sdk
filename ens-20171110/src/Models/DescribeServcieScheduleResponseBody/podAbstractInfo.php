<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponseBody\podAbstractInfo\containerStatuses;
use AlibabaCloud\Tea\Model;

class podAbstractInfo extends Model
{
    /**
     * @example android
     *
     * @var bool
     */
    public $containerService;

    /**
     * @var containerStatuses
     */
    public $containerStatuses;

    /**
     * @example gcs-prod-websocket-eip-telecom
     *
     * @var bool
     */
    public $name;

    /**
     * @example default-aliyun
     *
     * @var bool
     */
    public $namespace;

    /**
     * @example FDN
     *
     * @var bool
     */
    public $resourceScope;

    /**
     * @example RUNNING
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'containerService'  => 'ContainerService',
        'containerStatuses' => 'ContainerStatuses',
        'name'              => 'Name',
        'namespace'         => 'Namespace',
        'resourceScope'     => 'ResourceScope',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerService) {
            $res['ContainerService'] = $this->containerService;
        }
        if (null !== $this->containerStatuses) {
            $res['ContainerStatuses'] = null !== $this->containerStatuses ? $this->containerStatuses->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->resourceScope) {
            $res['ResourceScope'] = $this->resourceScope;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podAbstractInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerService'])) {
            $model->containerService = $map['ContainerService'];
        }
        if (isset($map['ContainerStatuses'])) {
            $model->containerStatuses = containerStatuses::fromMap($map['ContainerStatuses']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ResourceScope'])) {
            $model->resourceScope = $map['ResourceScope'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
