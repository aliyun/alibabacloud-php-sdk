<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class CreateSitePairRequest extends Model
{
    /**
     * @var string
     */
    public $primarySiteName;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $primarySiteRegionId;

    /**
     * @example cloud
     *
     * @var string
     */
    public $primarySiteType;

    /**
     * @example vpc-uf6j3rao8wkr7hb4uopv2
     *
     * @var string
     */
    public $primarySiteVpcId;

    /**
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $primarySiteZoneId;

    /**
     * @var string
     */
    public $secondarySiteName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $secondarySiteRegionId;

    /**
     * @example cloud
     *
     * @var string
     */
    public $secondarySiteType;

    /**
     * @example vpc-bp1wu55gbyqd7gh3yu3ey
     *
     * @var string
     */
    public $secondarySiteVpcId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $secondarySiteZoneId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example cloud2cloud
     *
     * @var string
     */
    public $sitePairType;
    protected $_name = [
        'primarySiteName'       => 'PrimarySiteName',
        'primarySiteRegionId'   => 'PrimarySiteRegionId',
        'primarySiteType'       => 'PrimarySiteType',
        'primarySiteVpcId'      => 'PrimarySiteVpcId',
        'primarySiteZoneId'     => 'PrimarySiteZoneId',
        'secondarySiteName'     => 'SecondarySiteName',
        'secondarySiteRegionId' => 'SecondarySiteRegionId',
        'secondarySiteType'     => 'SecondarySiteType',
        'secondarySiteVpcId'    => 'SecondarySiteVpcId',
        'secondarySiteZoneId'   => 'SecondarySiteZoneId',
        'securityToken'         => 'SecurityToken',
        'sitePairType'          => 'SitePairType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->primarySiteName) {
            $res['PrimarySiteName'] = $this->primarySiteName;
        }
        if (null !== $this->primarySiteRegionId) {
            $res['PrimarySiteRegionId'] = $this->primarySiteRegionId;
        }
        if (null !== $this->primarySiteType) {
            $res['PrimarySiteType'] = $this->primarySiteType;
        }
        if (null !== $this->primarySiteVpcId) {
            $res['PrimarySiteVpcId'] = $this->primarySiteVpcId;
        }
        if (null !== $this->primarySiteZoneId) {
            $res['PrimarySiteZoneId'] = $this->primarySiteZoneId;
        }
        if (null !== $this->secondarySiteName) {
            $res['SecondarySiteName'] = $this->secondarySiteName;
        }
        if (null !== $this->secondarySiteRegionId) {
            $res['SecondarySiteRegionId'] = $this->secondarySiteRegionId;
        }
        if (null !== $this->secondarySiteType) {
            $res['SecondarySiteType'] = $this->secondarySiteType;
        }
        if (null !== $this->secondarySiteVpcId) {
            $res['SecondarySiteVpcId'] = $this->secondarySiteVpcId;
        }
        if (null !== $this->secondarySiteZoneId) {
            $res['SecondarySiteZoneId'] = $this->secondarySiteZoneId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sitePairType) {
            $res['SitePairType'] = $this->sitePairType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSitePairRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrimarySiteName'])) {
            $model->primarySiteName = $map['PrimarySiteName'];
        }
        if (isset($map['PrimarySiteRegionId'])) {
            $model->primarySiteRegionId = $map['PrimarySiteRegionId'];
        }
        if (isset($map['PrimarySiteType'])) {
            $model->primarySiteType = $map['PrimarySiteType'];
        }
        if (isset($map['PrimarySiteVpcId'])) {
            $model->primarySiteVpcId = $map['PrimarySiteVpcId'];
        }
        if (isset($map['PrimarySiteZoneId'])) {
            $model->primarySiteZoneId = $map['PrimarySiteZoneId'];
        }
        if (isset($map['SecondarySiteName'])) {
            $model->secondarySiteName = $map['SecondarySiteName'];
        }
        if (isset($map['SecondarySiteRegionId'])) {
            $model->secondarySiteRegionId = $map['SecondarySiteRegionId'];
        }
        if (isset($map['SecondarySiteType'])) {
            $model->secondarySiteType = $map['SecondarySiteType'];
        }
        if (isset($map['SecondarySiteVpcId'])) {
            $model->secondarySiteVpcId = $map['SecondarySiteVpcId'];
        }
        if (isset($map['SecondarySiteZoneId'])) {
            $model->secondarySiteZoneId = $map['SecondarySiteZoneId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SitePairType'])) {
            $model->sitePairType = $map['SitePairType'];
        }

        return $model;
    }
}
