<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\anycastEipBindInfoList;
use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastEipAddressResponseBody\tags;

class DescribeAnycastEipAddressResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var anycastEipBindInfoList[]
     */
    public $anycastEipBindInfoList;

    /**
     * @var string
     */
    public $anycastId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $serviceLocation;

    /**
     * @var int
     */
    public $serviceManaged;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'aliUid' => 'AliUid',
        'anycastEipBindInfoList' => 'AnycastEipBindInfoList',
        'anycastId' => 'AnycastId',
        'bandwidth' => 'Bandwidth',
        'bid' => 'Bid',
        'businessStatus' => 'BusinessStatus',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'instanceChargeType' => 'InstanceChargeType',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress' => 'IpAddress',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'serviceLocation' => 'ServiceLocation',
        'serviceManaged' => 'ServiceManaged',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->anycastEipBindInfoList)) {
            Model::validateArray($this->anycastEipBindInfoList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->anycastEipBindInfoList) {
            if (\is_array($this->anycastEipBindInfoList)) {
                $res['AnycastEipBindInfoList'] = [];
                $n1 = 0;
                foreach ($this->anycastEipBindInfoList as $item1) {
                    $res['AnycastEipBindInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->anycastId) {
            $res['AnycastId'] = $this->anycastId;
        }

        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }

        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AnycastEipBindInfoList'])) {
            if (!empty($map['AnycastEipBindInfoList'])) {
                $model->anycastEipBindInfoList = [];
                $n1 = 0;
                foreach ($map['AnycastEipBindInfoList'] as $item1) {
                    $model->anycastEipBindInfoList[$n1] = anycastEipBindInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AnycastId'])) {
            $model->anycastId = $map['AnycastId'];
        }

        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }

        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
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
