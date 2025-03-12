<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class ModifyServiceInstanceResourcesRequest extends Model
{
    /**
     * @description The imported resources.
     *
     * @example {
     * }
     * @var string
     */
    public $resources;

    /**
     * @description The ID of the service instance.
     *
     * This parameter is required.
     * @example si-d8a0cc2a1ee04dce****
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The type of operation performed on the service instance resource. Valid values:
     *
     *   Import: The resource is imported.
     *   UnImport: The resource import is canceled.
     *
     * @example Import
     *
     * @var string
     */
    public $serviceInstanceResourcesAction;
    protected $_name = [
        'resources'                      => 'Resources',
        'serviceInstanceId'              => 'ServiceInstanceId',
        'serviceInstanceResourcesAction' => 'ServiceInstanceResourcesAction',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->serviceInstanceResourcesAction) {
            $res['ServiceInstanceResourcesAction'] = $this->serviceInstanceResourcesAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyServiceInstanceResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['ServiceInstanceResourcesAction'])) {
            $model->serviceInstanceResourcesAction = $map['ServiceInstanceResourcesAction'];
        }

        return $model;
    }
}
