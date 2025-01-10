<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponseBody\content\erInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponseBody\content\tags;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description Whether the Lingjun HUB(ER) has been bound.
     *
     *   **true**: ER is bound.
     *   **false**: No ER is bound.
     *
     * @example true
     *
     * @var bool
     */
    public $attachErStatus;

    /**
     * @description The CIDR block.
     *
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The time when the activation code was created.
     *
     * @example 1678273219000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The information of the bound Lingjun HUB(ER).
     *
     * @var erInfos[]
     */
    public $erInfos;

    /**
     * @description The time when the O\\&M task was modified.
     *
     * @example 2023-10-25 15:57:16
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The error message. (If the instance is in the Exception state, the exception cause is prompted.)
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The number of NCs.
     *
     * @example 16
     *
     * @var int
     */
    public $ncCount;

    /**
     * @description Number of Lingjun network interface controller.
     *
     * @example 1
     *
     * @var int
     */
    public $networkInterfaceCount;

    /**
     * @description The total number of secondary private IP addresses.
     *
     * @example 10
     *
     * @var int
     */
    public $privateIpCount;

    /**
     * @description The total quota information.
     *
     * @example 10
     *
     * @var int
     */
    public $quota;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of your Alibaba Cloud resource group.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of additional CIDR blocks.
     *
     * @var string[]
     */
    public $secondaryCidrBlocks;

    /**
     * @description Internal Service CIDR block.
     *
     * @example 169.254.252.0/23
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description The current state of the instance.
     *
     * Valid value:
     *
     *   Not Available: Not Available.
     *   Available: Normal: Available: Normal.
     *   Deleting: Deleting: Deleting: Deleting.
     *   Executing: executing: Executing: executing.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of subnets.
     *
     * @example 1
     *
     * @var int
     */
    public $subnetCount;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tags[]
     */
    public $tags;

    /**
     * @description The tenant ID.
     *
     * @example 1620939556166279
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The ID of the VPD instance.
     *
     * @example vpd-fuliephf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The name of the Lingjun CIDR block.
     *
     * @example vpd-1
     *
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'attachErStatus'        => 'AttachErStatus',
        'cidr'                  => 'Cidr',
        'createTime'            => 'CreateTime',
        'erInfos'               => 'ErInfos',
        'gmtModified'           => 'GmtModified',
        'message'               => 'Message',
        'ncCount'               => 'NcCount',
        'networkInterfaceCount' => 'NetworkInterfaceCount',
        'privateIpCount'        => 'PrivateIpCount',
        'quota'                 => 'Quota',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'secondaryCidrBlocks'   => 'SecondaryCidrBlocks',
        'serviceCidr'           => 'ServiceCidr',
        'status'                => 'Status',
        'subnetCount'           => 'SubnetCount',
        'tags'                  => 'Tags',
        'tenantId'              => 'TenantId',
        'vpdId'                 => 'VpdId',
        'vpdName'               => 'VpdName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachErStatus) {
            $res['AttachErStatus'] = $this->attachErStatus;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->erInfos) {
            $res['ErInfos'] = [];
            if (null !== $this->erInfos && \is_array($this->erInfos)) {
                $n = 0;
                foreach ($this->erInfos as $item) {
                    $res['ErInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ncCount) {
            $res['NcCount'] = $this->ncCount;
        }
        if (null !== $this->networkInterfaceCount) {
            $res['NetworkInterfaceCount'] = $this->networkInterfaceCount;
        }
        if (null !== $this->privateIpCount) {
            $res['PrivateIpCount'] = $this->privateIpCount;
        }
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->secondaryCidrBlocks) {
            $res['SecondaryCidrBlocks'] = $this->secondaryCidrBlocks;
        }
        if (null !== $this->serviceCidr) {
            $res['ServiceCidr'] = $this->serviceCidr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetCount) {
            $res['SubnetCount'] = $this->subnetCount;
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachErStatus'])) {
            $model->attachErStatus = $map['AttachErStatus'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErInfos'])) {
            if (!empty($map['ErInfos'])) {
                $model->erInfos = [];
                $n              = 0;
                foreach ($map['ErInfos'] as $item) {
                    $model->erInfos[$n++] = null !== $item ? erInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NcCount'])) {
            $model->ncCount = $map['NcCount'];
        }
        if (isset($map['NetworkInterfaceCount'])) {
            $model->networkInterfaceCount = $map['NetworkInterfaceCount'];
        }
        if (isset($map['PrivateIpCount'])) {
            $model->privateIpCount = $map['PrivateIpCount'];
        }
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecondaryCidrBlocks'])) {
            if (!empty($map['SecondaryCidrBlocks'])) {
                $model->secondaryCidrBlocks = $map['SecondaryCidrBlocks'];
            }
        }
        if (isset($map['ServiceCidr'])) {
            $model->serviceCidr = $map['ServiceCidr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetCount'])) {
            $model->subnetCount = $map['SubnetCount'];
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
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
