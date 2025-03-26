<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceByCenterPolicyIdResponseBody\resourceModelList\appModelList;

class resourceModelList extends Model
{
    /**
     * @var appModelList[]
     */
    public $appModelList;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var int
     */
    public $resourceGroupRelCount;

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
    public $resourceRegionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
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

    public function validate()
    {
        if (\is_array($this->appModelList)) {
            Model::validateArray($this->appModelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appModelList) {
            if (\is_array($this->appModelList)) {
                $res['AppModelList'] = [];
                $n1 = 0;
                foreach ($this->appModelList as $item1) {
                    $res['AppModelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppModelList'])) {
            if (!empty($map['AppModelList'])) {
                $model->appModelList = [];
                $n1 = 0;
                foreach ($map['AppModelList'] as $item1) {
                    $model->appModelList[$n1++] = appModelList::fromMap($item1);
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
