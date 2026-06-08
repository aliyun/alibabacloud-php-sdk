<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPendingApprovalsResponseBody\data\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPendingApprovalsResponseBody\data\data\contents\grantee;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListPendingApprovalsResponseBody\data\data\contents\resource;

class contents extends Model
{
    /**
     * @var string[]
     */
    public $accessTypes;

    /**
     * @var string
     */
    public $authMethod;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $defSchema;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string[]
     */
    public $finalAccessTypes;

    /**
     * @var grantee
     */
    public $grantee;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $processInstanceId;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'accessTypes' => 'AccessTypes',
        'authMethod' => 'AuthMethod',
        'createTime' => 'CreateTime',
        'defSchema' => 'DefSchema',
        'expirationTime' => 'ExpirationTime',
        'finalAccessTypes' => 'FinalAccessTypes',
        'grantee' => 'Grantee',
        'id' => 'Id',
        'processInstanceId' => 'ProcessInstanceId',
        'resource' => 'Resource',
        'resourceName' => 'ResourceName',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->accessTypes)) {
            Model::validateArray($this->accessTypes);
        }
        if (\is_array($this->finalAccessTypes)) {
            Model::validateArray($this->finalAccessTypes);
        }
        if (null !== $this->grantee) {
            $this->grantee->validate();
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTypes) {
            if (\is_array($this->accessTypes)) {
                $res['AccessTypes'] = [];
                $n1 = 0;
                foreach ($this->accessTypes as $item1) {
                    $res['AccessTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authMethod) {
            $res['AuthMethod'] = $this->authMethod;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defSchema) {
            $res['DefSchema'] = $this->defSchema;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->finalAccessTypes) {
            if (\is_array($this->finalAccessTypes)) {
                $res['FinalAccessTypes'] = [];
                $n1 = 0;
                foreach ($this->finalAccessTypes as $item1) {
                    $res['FinalAccessTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grantee) {
            $res['Grantee'] = null !== $this->grantee ? $this->grantee->toArray($noStream) : $this->grantee;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AccessTypes'])) {
            if (!empty($map['AccessTypes'])) {
                $model->accessTypes = [];
                $n1 = 0;
                foreach ($map['AccessTypes'] as $item1) {
                    $model->accessTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthMethod'])) {
            $model->authMethod = $map['AuthMethod'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefSchema'])) {
            $model->defSchema = $map['DefSchema'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['FinalAccessTypes'])) {
            if (!empty($map['FinalAccessTypes'])) {
                $model->finalAccessTypes = [];
                $n1 = 0;
                foreach ($map['FinalAccessTypes'] as $item1) {
                    $model->finalAccessTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Grantee'])) {
            $model->grantee = grantee::fromMap($map['Grantee']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = resource::fromMap($map['Resource']);
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
