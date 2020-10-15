<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeServcieScheduleResponse\podAbstractInfo\containerStatuses;
use AlibabaCloud\Tea\Model;

class podAbstractInfo extends Model
{
    /**
     * @var bool
     */
    public $name;

    /**
     * @var bool
     */
    public $resourceScope;

    /**
     * @var bool
     */
    public $containerService;

    /**
     * @var bool
     */
    public $namespace;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var containerStatuses
     */
    public $containerStatuses;
    protected $_name = [
        'name'              => 'Name',
        'resourceScope'     => 'ResourceScope',
        'containerService'  => 'ContainerService',
        'namespace'         => 'Namespace',
        'status'            => 'Status',
        'containerStatuses' => 'ContainerStatuses',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('resourceScope', $this->resourceScope, true);
        Model::validateRequired('containerService', $this->containerService, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('containerStatuses', $this->containerStatuses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceScope) {
            $res['ResourceScope'] = $this->resourceScope;
        }
        if (null !== $this->containerService) {
            $res['ContainerService'] = $this->containerService;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->containerStatuses) {
            $res['ContainerStatuses'] = null !== $this->containerStatuses ? $this->containerStatuses->toMap() : null;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceScope'])) {
            $model->resourceScope = $map['ResourceScope'];
        }
        if (isset($map['ContainerService'])) {
            $model->containerService = $map['ContainerService'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ContainerStatuses'])) {
            $model->containerStatuses = containerStatuses::fromMap($map['ContainerStatuses']);
        }

        return $model;
    }
}
