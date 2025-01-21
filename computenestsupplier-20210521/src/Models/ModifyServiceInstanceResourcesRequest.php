<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class ModifyServiceInstanceResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $resources;
    /**
     * @var string
     */
    public $serviceInstanceId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
