<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody;

use AlibabaCloud\Dara\Model;

class officeSiteInfo extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var bool
     */
    public $preferVpcAccess;

    /**
     * @var string
     */
    public $providerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ssoServiceUrl;

    /**
     * @var string
     */
    public $vpcAccessAddress;
    protected $_name = [
        'accessType' => 'AccessType',
        'officeSiteId' => 'OfficeSiteId',
        'preferVpcAccess' => 'PreferVpcAccess',
        'providerId' => 'ProviderId',
        'regionId' => 'RegionId',
        'ssoServiceUrl' => 'SsoServiceUrl',
        'vpcAccessAddress' => 'VpcAccessAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->preferVpcAccess) {
            $res['PreferVpcAccess'] = $this->preferVpcAccess;
        }

        if (null !== $this->providerId) {
            $res['ProviderId'] = $this->providerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ssoServiceUrl) {
            $res['SsoServiceUrl'] = $this->ssoServiceUrl;
        }

        if (null !== $this->vpcAccessAddress) {
            $res['VpcAccessAddress'] = $this->vpcAccessAddress;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['PreferVpcAccess'])) {
            $model->preferVpcAccess = $map['PreferVpcAccess'];
        }

        if (isset($map['ProviderId'])) {
            $model->providerId = $map['ProviderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SsoServiceUrl'])) {
            $model->ssoServiceUrl = $map['SsoServiceUrl'];
        }

        if (isset($map['VpcAccessAddress'])) {
            $model->vpcAccessAddress = $map['VpcAccessAddress'];
        }

        return $model;
    }
}
