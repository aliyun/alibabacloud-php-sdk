<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\ListResourcesResponseBody\resources\tags;

class resources extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $dependsOnResourceIds;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var mixed[]
     */
    public $propertyVariables;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $terraformArn;

    /**
     * @var string
     */
    public $terraformCode;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountId' => 'accountId',
        'createTime' => 'createTime',
        'dependsOnResourceIds' => 'dependsOnResourceIds',
        'productCode' => 'productCode',
        'properties' => 'properties',
        'propertyVariables' => 'propertyVariables',
        'regionId' => 'regionId',
        'resourceArn' => 'resourceArn',
        'resourceGroupId' => 'resourceGroupId',
        'resourceId' => 'resourceId',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'status' => 'status',
        'tags' => 'tags',
        'terraformArn' => 'terraformArn',
        'terraformCode' => 'terraformCode',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        if (\is_array($this->dependsOnResourceIds)) {
            Model::validateArray($this->dependsOnResourceIds);
        }
        if (\is_array($this->properties)) {
            Model::validateArray($this->properties);
        }
        if (\is_array($this->propertyVariables)) {
            Model::validateArray($this->propertyVariables);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dependsOnResourceIds) {
            if (\is_array($this->dependsOnResourceIds)) {
                $res['dependsOnResourceIds'] = [];
                $n1 = 0;
                foreach ($this->dependsOnResourceIds as $item1) {
                    $res['dependsOnResourceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        if (null !== $this->properties) {
            if (\is_array($this->properties)) {
                $res['properties'] = [];
                foreach ($this->properties as $key1 => $value1) {
                    $res['properties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->propertyVariables) {
            if (\is_array($this->propertyVariables)) {
                $res['propertyVariables'] = [];
                foreach ($this->propertyVariables as $key1 => $value1) {
                    $res['propertyVariables'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->terraformArn) {
            $res['terraformArn'] = $this->terraformArn;
        }

        if (null !== $this->terraformCode) {
            $res['terraformCode'] = $this->terraformCode;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dependsOnResourceIds'])) {
            if (!empty($map['dependsOnResourceIds'])) {
                $model->dependsOnResourceIds = [];
                $n1 = 0;
                foreach ($map['dependsOnResourceIds'] as $item1) {
                    $model->dependsOnResourceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        if (isset($map['properties'])) {
            if (!empty($map['properties'])) {
                $model->properties = [];
                foreach ($map['properties'] as $key1 => $value1) {
                    $model->properties[$key1] = $value1;
                }
            }
        }

        if (isset($map['propertyVariables'])) {
            if (!empty($map['propertyVariables'])) {
                $model->propertyVariables = [];
                foreach ($map['propertyVariables'] as $key1 => $value1) {
                    $model->propertyVariables[$key1] = $value1;
                }
            }
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['terraformArn'])) {
            $model->terraformArn = $map['terraformArn'];
        }

        if (isset($map['terraformCode'])) {
            $model->terraformCode = $map['terraformCode'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
