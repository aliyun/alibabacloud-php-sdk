<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data;

use AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList\operation;
use AlibabaCloud\SDK\BPStudio\V20200710\Models\GetDeployDetailResponseBody\data\resourceList\resourceTimeList;
use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @var string
     */
    public $buyDuration;

    /**
     * @example Free
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example OpenApi
     *
     * @var string
     */
    public $executionStrategy;

    /**
     * @example 1714031840000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example https://cloudmonitor.console.aliyun.com/?#/generalcharts/product=vpc&group=&type=&return&region=cn-hangzhou&dimension=instanceId:vpc-bp1n6uc5jqxtff2euhnx5
     *
     * @var string
     */
    public $monitorURL;

    /**
     * @example vpc
     *
     * @var string
     */
    public $nodeName;

    /**
     * @var operation
     */
    public $operation;

    /**
     * @example 1716049421
     *
     * @var int
     */
    public $refId;

    /**
     * @example {\\"Description\\":\\"\\",\\"ClassicLinkEnabled\\":false,\\"ResourceGroupId\\":\\"rg-acfm4mlwqjalz7a\\",\\"SecondaryCidrBlocks\\":[],\\"CidrBlock\\":\\"192.168.0.0/16\\",\\"UserCidrs\\":[],\\"NetworkAclNum\\":\\"0\\",\\"VRouterId\\":\\"vrt-m5ek7vcyld0x5ym8m9hix\\",\\"OwnerId\\":1986207497633020,\\"AssociatedCens\\":[],\\"id\\":\\"vpc-m5e3c9nz4lj19byan9m2g\\",\\"CloudResources\\":[{\\"ResourceCount\\":1,\\"ResourceType\\":\\"VSwitch\\"},{\\"ResourceCount\\":1,\\"ResourceType\\":\\"VRouter\\"},{\\"ResourceCount\\":1,\\"ResourceType\\":\\"RouteTable\\"}],\\"Tags\\":[],\\"Status\\":\\"Available\\",\\"IsDefault\\":false,\\"RequestId\\":\\"494646FB-14C0-5B4C-9684-B6EFBF4DF01C\\",\\"SupportIpv4Gateway\\":false,\\"Ipv4GatewayId\\":\\"\\",\\"VSwitchIds\\":[\\"vsw-m5egl9wtppiadysjwlgb1\\"],\\"VpcId\\":\\"vpc-m5e3c9nz4lj19byan9m2g\\",\\"CreationTime\\":\\"2024-04-25T07:56:59Z\\",\\"VpcName\\":\\"vpc\\",\\"refId\\":\\"1714031764_0\\",\\"RegionId\\":\\"cn-qingdao\\",\\"Ipv6CidrBlock\\":\\"\\",\\"Ipv6CidrBlocks\\":[]}
     *
     * @var string
     */
    public $remark;

    /**
     * @example ecs
     *
     * @var string
     */
    public $resourceCode;

    /**
     * @example i-2zehnzxqixu1pywsfbx1
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var resourceTimeList[]
     */
    public $resourceTimeList;

    /**
     * @example vpc
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example Finish
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'buyDuration'       => 'BuyDuration',
        'chargeType'        => 'ChargeType',
        'executionStrategy' => 'ExecutionStrategy',
        'modifiedTime'      => 'ModifiedTime',
        'monitorURL'        => 'MonitorURL',
        'nodeName'          => 'NodeName',
        'operation'         => 'Operation',
        'refId'             => 'RefId',
        'remark'            => 'Remark',
        'resourceCode'      => 'ResourceCode',
        'resourceId'        => 'ResourceId',
        'resourceTimeList'  => 'ResourceTimeList',
        'resourceType'      => 'ResourceType',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyDuration) {
            $res['BuyDuration'] = $this->buyDuration;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->executionStrategy) {
            $res['ExecutionStrategy'] = $this->executionStrategy;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->monitorURL) {
            $res['MonitorURL'] = $this->monitorURL;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->operation) {
            $res['Operation'] = null !== $this->operation ? $this->operation->toMap() : null;
        }
        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceCode) {
            $res['ResourceCode'] = $this->resourceCode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceTimeList) {
            $res['ResourceTimeList'] = [];
            if (null !== $this->resourceTimeList && \is_array($this->resourceTimeList)) {
                $n = 0;
                foreach ($this->resourceTimeList as $item) {
                    $res['ResourceTimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyDuration'])) {
            $model->buyDuration = $map['BuyDuration'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ExecutionStrategy'])) {
            $model->executionStrategy = $map['ExecutionStrategy'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['MonitorURL'])) {
            $model->monitorURL = $map['MonitorURL'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Operation'])) {
            $model->operation = operation::fromMap($map['Operation']);
        }
        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceCode'])) {
            $model->resourceCode = $map['ResourceCode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceTimeList'])) {
            if (!empty($map['ResourceTimeList'])) {
                $model->resourceTimeList = [];
                $n                       = 0;
                foreach ($map['ResourceTimeList'] as $item) {
                    $model->resourceTimeList[$n++] = null !== $item ? resourceTimeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
