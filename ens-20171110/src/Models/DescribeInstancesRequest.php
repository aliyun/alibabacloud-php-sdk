<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesRequest\tags;
use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The IDs of the regions. The value is a JSON array that consists of up to 100 IDs. Separate multiple IDs with commas (,).
     *
     * @example ["cn-suzhou-telecom","cn-chengdu-telecom"]
     *
     * @var string
     */
    public $ensRegionIds;

    /**
     * @description The ID of the edge service. You can use the ID to query information about the instances that are created in the edge service.
     *
     * @example ens-20190730202316s****
     *
     * @var string
     */
    public $ensServiceId;

    /**
     * @description The ID of the image.
     *
     * @example centos_6_08_64_20G_alibase_****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5iqczfxps7csjrxeca****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IDs of the instances. The value is a JSON array that consists of up to 100 IDs. Separate IDs with commas (,).
     *
     * @example ["i-5iqczfxps7csjrxeca07****", "i-5iqczfxps7csjrxeca07****"]]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The name of the instance.
     *
     * @example TestName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The condition that you want to use to filter instances by category. Valid values:
     *
     *   EnsInstance: ENS instances that you purchase.
     *   EnsService: ENS instances that belong to edge services.
     *   BuildMachine: ENS instances that are configured with image builders.
     *   EnsPostPaidInstance: Pay-as-you-go ENS instances that you purchase.
     *
     * @example EnsService
     *
     * @var string
     */
    public $instanceResourceType;

    /**
     * @description The internal IP address of the instance.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the network.
     *
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $networkId;

    /**
     * @description The method that you want to use to sort instances. The value of this parameter is in the JSON format.
     *
     * You can sort instances by name, expiration time, node ID, or creation time. You can specify one or more methods.
     * @example {"InstanceNameSort":"asc","ExpireTimeSort":"asc","CreationTimeSort":"desc"}}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @description The number of the page to return. Pages start from page **1**.
     *
     * Default value: **1**.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. The maximum value is **100**.
     *
     * Default value: **10**.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The keyword that you use to query the logs of the service. You can specify the values of parameters such as **ip**, **InstanceName**, and **InstanceId** as the keyword.
     *
     * @example Joshua
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The ID of the security group.
     *
     * @example sg-5kyicq2kfcapxrdds6tar7jqb
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   Running
     *   Stopped
     *   Expired
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2zeh0r1pabwtg6wcs****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'          => 'EnsRegionId',
        'ensRegionIds'         => 'EnsRegionIds',
        'ensServiceId'         => 'EnsServiceId',
        'imageId'              => 'ImageId',
        'instanceId'           => 'InstanceId',
        'instanceIds'          => 'InstanceIds',
        'instanceName'         => 'InstanceName',
        'instanceResourceType' => 'InstanceResourceType',
        'intranetIp'           => 'IntranetIp',
        'networkId'            => 'NetworkId',
        'orderByParams'        => 'OrderByParams',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'searchKey'            => 'SearchKey',
        'securityGroupId'      => 'SecurityGroupId',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
