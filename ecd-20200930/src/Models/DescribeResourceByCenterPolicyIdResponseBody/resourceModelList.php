<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody\resourceModelList\appModelList;
use AlibabaCloud\Tea\Model;

class resourceModelList extends Model
{
    /**
     * @description The cloud applications.
     *
     * @var appModelList[]
     */
    public $appModelList;

    /**
     * @description The number of vCPUs.
     *
     * @example 64
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The cloud computer type. You can call the [DescribeDesktopTypes](https://help.aliyun.com/document_detail/188882.html) operation to query the IDs of the cloud computer types supported by Alibaba Cloud Workspace.
     *
     * @example eds.enterprise_office.8c32g
     *
     * @var string
     */
    public $desktopType;

    /**
     * @description The number of GPUs.
     *
     * @example 0.125
     *
     * @var float
     */
    public $gpuCount;

    /**
     * @description The GPU type.
     *
     * @example 2GiB
     *
     * @var string
     */
    public $gpuSpec;

    /**
     * @description The memory size. Unit: MiB.
     *
     * @example 10240
     *
     * @var int
     */
    public $memory;

    /**
     * @description The OS type.
     *
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @description The billing method.
     *
     * @example postPaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The service type.
     *
     * @example desktop
     *
     * @var string
     */
    public $productType;

    /**
     * @description The protocol type.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The resource group ID.
     *
     * @example rg-d7pasxsd3b9nhq**
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource group name.
     *
     * @example test
     *
     * @var string
     */
    public $resourceGroupName;

    /**
     * @description The number of associated resource groups
     *
     * @example 10
     *
     * @var int
     */
    public $resourceGroupRelCount;

    /**
     * @description The resource ID.
     *
     * @example ecd-7o96aa08fr****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource name.
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The region ID of the resource.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The resource type.
     *
     * @example desktop
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The resource status.
     *
     * @example Stopped
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appModelList' => 'AppModelList',
        'cpu' => 'Cpu',
        'desktopType' => 'DesktopType',
        'gpuCount' => 'GpuCount',
        'gpuSpec' => 'GpuSpec',
        'memory' => 'Memory',
        'osType' => 'OsType',
        'payType' => 'PayType',
        'productType' => 'ProductType',
        'protocolType' => 'ProtocolType',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceGroupName' => 'ResourceGroupName',
        'resourceGroupRelCount' => 'ResourceGroupRelCount',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appModelList) {
            $res['AppModelList'] = [];
            if (null !== $this->appModelList && \is_array($this->appModelList)) {
                $n = 0;
                foreach ($this->appModelList as $item) {
                    $res['AppModelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->resourceGroupRelCount) {
            $res['ResourceGroupRelCount'] = $this->resourceGroupRelCount;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
     * @return resourceModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppModelList'])) {
            if (!empty($map['AppModelList'])) {
                $model->appModelList = [];
                $n = 0;
                foreach ($map['AppModelList'] as $item) {
                    $model->appModelList[$n++] = null !== $item ? appModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['ResourceGroupRelCount'])) {
            $model->resourceGroupRelCount = $map['ResourceGroupRelCount'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
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
