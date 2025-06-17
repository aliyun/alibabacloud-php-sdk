<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVccRequest\tag;

class CreateVccRequest extends Model
{
    /**
     * @var bool
     */
    public $accessCouldService;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $bgpAsn;

    /**
     * @var string
     */
    public $bgpCidr;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenOwnerId;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vccId;

    /**
     * @var string
     */
    public $vccName;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accessCouldService' => 'AccessCouldService',
        'bandwidth' => 'Bandwidth',
        'bgpAsn' => 'BgpAsn',
        'bgpCidr' => 'BgpCidr',
        'cenId' => 'CenId',
        'cenOwnerId' => 'CenOwnerId',
        'connectionType' => 'ConnectionType',
        'description' => 'Description',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'vccId' => 'VccId',
        'vccName' => 'VccName',
        'vpcId' => 'VpcId',
        'vpdId' => 'VpdId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
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
