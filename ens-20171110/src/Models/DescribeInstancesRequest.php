<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesRequest\tags;

class DescribeInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $eipAddresses;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $ensRegionIds;

    /**
     * @var string
     */
    public $ensServiceId;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceResourceType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $networkId;

    /**
     * @var string
     */
    public $orderByParams;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string[]
     */
    public $serviceStatus;

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
    public $vSwitchId;
    protected $_name = [
        'eipAddresses' => 'EipAddresses',
        'ensRegionId' => 'EnsRegionId',
        'ensRegionIds' => 'EnsRegionIds',
        'ensServiceId' => 'EnsServiceId',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'instanceIds' => 'InstanceIds',
        'instanceName' => 'InstanceName',
        'instanceResourceType' => 'InstanceResourceType',
        'instanceType' => 'InstanceType',
        'intranetIp' => 'IntranetIp',
        'networkId' => 'NetworkId',
        'orderByParams' => 'OrderByParams',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'securityGroupId' => 'SecurityGroupId',
        'serviceStatus' => 'ServiceStatus',
        'status' => 'Status',
        'tags' => 'Tags',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->eipAddresses)) {
            Model::validateArray($this->eipAddresses);
        }
        if (\is_array($this->serviceStatus)) {
            Model::validateArray($this->serviceStatus);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipAddresses) {
            if (\is_array($this->eipAddresses)) {
                $res['EipAddresses'] = [];
                $n1 = 0;
                foreach ($this->eipAddresses as $item1) {
                    $res['EipAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }

        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceResourceType) {
            $res['InstanceResourceType'] = $this->instanceResourceType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }

        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->serviceStatus) {
            if (\is_array($this->serviceStatus)) {
                $res['ServiceStatus'] = [];
                $n1 = 0;
                foreach ($this->serviceStatus as $item1) {
                    $res['ServiceStatus'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = [];
                $n1 = 0;
                foreach ($map['EipAddresses'] as $item1) {
                    $model->eipAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = $map['EnsRegionIds'];
        }

        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceResourceType'])) {
            $model->instanceResourceType = $map['InstanceResourceType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }

        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['ServiceStatus'])) {
            if (!empty($map['ServiceStatus'])) {
                $model->serviceStatus = [];
                $n1 = 0;
                foreach ($map['ServiceStatus'] as $item1) {
                    $model->serviceStatus[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
