<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\ListAnycastEipAddressesRequest\tags;

class ListAnycastEipAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $anycastEipAddress;

    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var string[]
     */
    public $anycastIds;

    /**
     * @var string[]
     */
    public $bindInstanceIds;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceLocation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'anycastEipAddress' => 'AnycastEipAddress',
        'anycastId' => 'AnycastId',
        'anycastIds' => 'AnycastIds',
        'bindInstanceIds' => 'BindInstanceIds',
        'businessStatus' => 'BusinessStatus',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'maxResults' => 'MaxResults',
        'name' => 'Name',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceLocation' => 'ServiceLocation',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->anycastIds)) {
            Model::validateArray($this->anycastIds);
        }
        if (\is_array($this->bindInstanceIds)) {
            Model::validateArray($this->bindInstanceIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->anycastEipAddress) {
            $res['AnycastEipAddress'] = $this->anycastEipAddress;
        }

        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->anycastIds) {
            if (\is_array($this->anycastIds)) {
                $res['AnycastIds'] = [];
                $n1 = 0;
                foreach ($this->anycastIds as $item1) {
                    $res['AnycastIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bindInstanceIds) {
            if (\is_array($this->bindInstanceIds)) {
                $res['BindInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->bindInstanceIds as $item1) {
                    $res['BindInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AnycastEipAddress'])) {
            $model->anycastEipAddress = $map['AnycastEipAddress'];
        }

        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['AnycastIds'])) {
            if (!empty($map['AnycastIds'])) {
                $model->anycastIds = [];
                $n1 = 0;
                foreach ($map['AnycastIds'] as $item1) {
                    $model->anycastIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BindInstanceIds'])) {
            if (!empty($map['BindInstanceIds'])) {
                $model->bindInstanceIds = [];
                $n1 = 0;
                foreach ($map['BindInstanceIds'] as $item1) {
                    $model->bindInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
