<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest\subnets;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateVpdRequest extends Model
{
    /**
     * @description The CIDR block of the VPD.
     *
     *   We recommend that you use an RFC private endpoint as the Lingjun CIDR block, such as 10.0.0.0/8,172.16.0.0/12,192.168.0.0/16. In scenarios where the Doringjun CIDR block is connected to each other or where the Lingjun CIDR block is connected to a VPC, make sure that the addresses do not conflict with each other.
     *   You can also use a custom CIDR block other than 100.64.0.0/10, 224.0.0.0/4, 127.0.0.0/8, or 169.254.0.0/16 and their subnets as the primary IPv4 CIDR block of the VPD.
     *
     * This parameter is required.
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The region ID of the disk.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/94475.htm?spm=a2c4g.11186623.0.0.29e15d7akXhpuu).
     * @example rg-aek2l4sq6l7unhi
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Lingjun subnet information list
     *
     * @var subnets[]
     */
    public $subnets;

    /**
     * @description A tag.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Lingjun CIDR block instance name
     *
     * This parameter is required.
     * @example vpd-1
     *
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr'            => 'Cidr',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'subnets'         => 'Subnets',
        'tag'             => 'Tag',
        'vpdName'         => 'VpdName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->subnets) {
            $res['Subnets'] = [];
            if (null !== $this->subnets && \is_array($this->subnets)) {
                $n = 0;
                foreach ($this->subnets as $item) {
                    $res['Subnets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Subnets'])) {
            if (!empty($map['Subnets'])) {
                $model->subnets = [];
                $n              = 0;
                foreach ($map['Subnets'] as $item) {
                    $model->subnets[$n++] = null !== $item ? subnets::fromMap($item) : $item;
                }
            }
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
        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
