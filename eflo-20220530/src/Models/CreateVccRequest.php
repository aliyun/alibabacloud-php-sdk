<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateVccRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $accessCouldService;

    /**
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @example cen-bkiw0x1347roekr7f2
     *
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example vsw-t4nahb0pxckgktx1kot8q
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @example vpc-uf6aa4ddo97frj22tgp52
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vpd-t2jseldp
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'accessCouldService' => 'AccessCouldService',
        'bgpCidr'            => 'BgpCidr',
        'cenId'              => 'CenId',
        'description'        => 'Description',
        'regionId'           => 'RegionId',
        'vSwitchId'          => 'VSwitchId',
        'vccId'              => 'VccId',
        'vpcId'              => 'VpcId',
        'vpdId'              => 'VpdId',
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
        if (null !== $this->bgpCidr) {
            $res['BgpCidr'] = $this->bgpCidr;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['BgpCidr'])) {
            $model->bgpCidr = $map['BgpCidr'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
