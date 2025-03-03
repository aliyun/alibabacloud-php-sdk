<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\encryption;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\executor;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\labels;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListResourcesResponseBody\resources\quotas;

class resources extends Model
{
    /**
     * @var encryption
     */
    public $encryption;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var executor
     */
    public $executor;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $groupName;
    /**
     * @var string
     */
    public $id;
    /**
     * @var bool
     */
    public $isDefault;
    /**
     * @var labels[]
     */
    public $labels;
    /**
     * @var string
     */
    public $name;
    /**
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
     * @var mixed[]
     */
    public $spec;
    /**
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
        'labels'        => 'Labels',
        'name'          => 'Name',
        'productType'   => 'ProductType',
        'quotas'        => 'Quotas',
        'resourceType'  => 'ResourceType',
        'spec'          => 'Spec',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->encryption) {
            $this->encryption->validate();
        }
        if (null !== $this->executor) {
            $this->executor->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        if (\is_array($this->spec)) {
            Model::validateArray($this->spec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toArray($noStream) : $this->encryption;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->executor) {
            $res['Executor'] = null !== $this->executor ? $this->executor->toArray($noStream) : $this->executor;
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

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1            = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['Quotas'] = [];
                $n1            = 0;
                foreach ($this->quotas as $item1) {
                    $res['Quotas'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->spec) {
            if (\is_array($this->spec)) {
                $res['Spec'] = [];
                foreach ($this->spec as $key1 => $value1) {
                    $res['Spec'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1            = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1++] = labels::fromMap($item1);
                }
            }
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
                $n1            = 0;
                foreach ($map['Quotas'] as $item1) {
                    $model->quotas[$n1++] = quotas::fromMap($item1);
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Spec'])) {
            if (!empty($map['Spec'])) {
                $model->spec = [];
                foreach ($map['Spec'] as $key1 => $value1) {
                    $model->spec[$key1] = $value1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
