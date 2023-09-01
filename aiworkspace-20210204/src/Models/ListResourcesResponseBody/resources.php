<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\encryption;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\executor;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\quotas;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var encryption
     */
    public $encryption;

    /**
     * @example prod
     *
     * @var string
     */
    public $envType;

    /**
     * @var executor
     */
    public $executor;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example groupName
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 123
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example ResourceName
     *
     * @var string
     */
    public $name;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $productType;

    /**
     * @var quotas[]
     */
    public $quotas;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @example 对于MaxCompute {"Endpoint": "odps.alibaba-inc.com", "Project": "mignshi"}
     *
     * @var mixed[]
     */
    public $spec;

    /**
     * @example 123
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'encryption'    => 'Encryption',
        'envType'       => 'EnvType',
        'executor'      => 'Executor',
        'gmtCreateTime' => 'GmtCreateTime',
        'groupName'     => 'GroupName',
        'id'            => 'Id',
        'isDefault'     => 'IsDefault',
        'name'          => 'Name',
        'productType'   => 'ProductType',
        'quotas'        => 'Quotas',
        'resourceType'  => 'ResourceType',
        'spec'          => 'Spec',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toMap() : null;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->quotas) {
            $res['Quotas'] = [];
            if (null !== $this->quotas && \is_array($this->quotas)) {
                $n = 0;
                foreach ($this->quotas as $item) {
                    $res['Quotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Encryption'])) {
            $model->encryption = encryption::fromMap($map['Encryption']);
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Executor'])) {
            $model->executor = executor::fromMap($map['Executor']);
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n             = 0;
                foreach ($map['Quotas'] as $item) {
                    $model->quotas[$n++] = null !== $item ? quotas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
