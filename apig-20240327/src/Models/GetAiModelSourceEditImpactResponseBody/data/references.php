<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetAiModelSourceEditImpactResponseBody\data;

use AlibabaCloud\Dara\Model;

class references extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $logicalModelId;

    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $routeId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'apiId' => 'apiId',
        'logicalModelId' => 'logicalModelId',
        'modelCardId' => 'modelCardId',
        'objectId' => 'objectId',
        'objectType' => 'objectType',
        'role' => 'role',
        'routeId' => 'routeId',
        'serviceId' => 'serviceId',
        'state' => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->logicalModelId) {
            $res['logicalModelId'] = $this->logicalModelId;
        }

        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->objectId) {
            $res['objectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->routeId) {
            $res['routeId'] = $this->routeId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['logicalModelId'])) {
            $model->logicalModelId = $map['logicalModelId'];
        }

        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['objectId'])) {
            $model->objectId = $map['objectId'];
        }

        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['routeId'])) {
            $model->routeId = $map['routeId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
