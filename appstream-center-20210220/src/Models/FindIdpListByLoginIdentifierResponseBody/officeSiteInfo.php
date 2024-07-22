<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody;

use AlibabaCloud\Tea\Model;

class officeSiteInfo extends Model
{
    /**
     * @example INTERNET
     *
     * @var string
     */
    public $accessType;

    /**
     * @example cn-shanghai+dir-448204****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example 26842
     *
     * @var string
     */
    public $providerId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ssoServiceUrl;
    protected $_name = [
        'accessType'    => 'AccessType',
        'officeSiteId'  => 'OfficeSiteId',
        'providerId'    => 'ProviderId',
        'regionId'      => 'RegionId',
        'ssoServiceUrl' => 'SsoServiceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return officeSiteInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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

        return $model;
    }
}
