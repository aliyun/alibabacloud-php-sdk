<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVccRequest extends Model
{
    /**
     * @description Enabled access to cloud services. Optional values:
     *
     *   **true**: Enable access to cloud services
     *   **false**: Do not enable access to cloud services
     *
     * @example true
     *
     * @var bool
     */
    public $accessCouldService;

    /**
     * @description The bandwidth. Unit: Mbit /s. The minimum value is 1000, representing 1Gbps bandwidth; the maximum value is 400000, representing 400Gbps bandwidth.
     *
     * >  1Gbps = 1000Mbps
     * @example 1000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description bgp as number
     *
     * @example bgpAsn
     *
     * @var int
     */
    public $bgpAsn;

    /**
     * @description Internet segment, on-premises input, off-premises default
     *
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @description CEN Instance ID
     *
     * @example cen-bkiw0x1347roekr7f2
     *
     * @var string
     */
    public $cenId;

    /**
     * @description Account to which cen belongs
     *
     * @example 1511928242963727
     *
     * @var string
     */
    public $cenOwnerId;

    /**
     * @description The connection mode. Valid values:
     *
     *   **VPC**
     *   **CEN (CENTR)**
     *
     * @example CENTR
     *
     * @var string
     */
    public $connectionType;

    /**
     * @description The description of the document.
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The region ID.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aeky5f3qx6ceapq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tag information.
     *
     * You can specify up to 20 tags.
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the vSwitch. [Virtual Private Cloud VSwitch](https://help.aliyun.com/document_detail/100380.html).
     *
     * You can call the [DescribeVSwitches](https://help.aliyun.com/document_detail/35748.html) operation to query created vSwitches.
     * @example vsw-t4nahb0pxckgktx1kot8q
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the Lingjun connection instance.
     *
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @description Lingjun Connection Name
     *
     * @example test
     *
     * @var string
     */
    public $vccName;

    /**
     * @description Virtual Private Cloud IDs; [What is Virtual Private Cloud](https://help.aliyun.com/document_detail/34217.html)
     *
     * You can call the [DescribeVpcs](https://help.aliyun.com/document_detail/35739.html#demo-0) operation to query the specified VPC.
     * @example vpc-uf6aa4ddo97frj22tgp52
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Lingjun CIDR block instance ID
     *
     * @example vpd-t2jseldp
     *
     * @var string
     */
    public $vpdId;

    /**
     * @description The zone ID of the disk.
     *
     * @example cn-wulanchabu-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessCouldService' => 'AccessCouldService',
        'bandwidth'          => 'Bandwidth',
        'bgpAsn'             => 'BgpAsn',
        'bgpCidr'            => 'BgpCidr',
        'cenId'              => 'CenId',
        'cenOwnerId'         => 'CenOwnerId',
        'connectionType'     => 'ConnectionType',
        'description'        => 'Description',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'tag'                => 'Tag',
        'vSwitchId'          => 'VSwitchId',
        'vccId'              => 'VccId',
        'vccName'            => 'VccName',
        'vpcId'              => 'VpcId',
        'vpdId'              => 'VpdId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCouldService) {
            $res['AccessCouldService'] = $this->accessCouldService;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bgpAsn) {
            $res['BgpAsn'] = $this->bgpAsn;
        }
        if (null !== $this->bgpCidr) {
            $res['BgpCidr'] = $this->bgpCidr;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccName) {
            $res['VccName'] = $this->vccName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVccRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessCouldService'])) {
            $model->accessCouldService = $map['AccessCouldService'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BgpAsn'])) {
            $model->bgpAsn = $map['BgpAsn'];
        }
        if (isset($map['BgpCidr'])) {
            $model->bgpCidr = $map['BgpCidr'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccName'])) {
            $model->vccName = $map['VccName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
