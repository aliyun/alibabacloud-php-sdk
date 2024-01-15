<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ConfigADConnectorTrustRequest extends Model
{
    /**
     * @description The ID of the AD workspace.
     *
     * @example cn-hangzhou+dir-778418****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description Specifies whether to configure the trust password for the RDS license domain of the AD workspace.
     *
     * Valid values:
     *
     *   true
     *
     * for the RDS license domain of the AD workspace.
     *
     *   false
     *
     * for common AD workspaces.
     * @example true
     *
     * @var bool
     */
    public $rdsLicenseDomain;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The trust password. You can specify the password when you configure a trust relationship between the AD domain and the ecd.acs domain.
     *
     * @example password123***
     *
     * @var string
     */
    public $trustKey;
    protected $_name = [
        'officeSiteId'     => 'OfficeSiteId',
        'rdsLicenseDomain' => 'RdsLicenseDomain',
        'regionId'         => 'RegionId',
        'trustKey'         => 'TrustKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->rdsLicenseDomain) {
            $res['RdsLicenseDomain'] = $this->rdsLicenseDomain;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->trustKey) {
            $res['TrustKey'] = $this->trustKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigADConnectorTrustRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RdsLicenseDomain'])) {
            $model->rdsLicenseDomain = $map['RdsLicenseDomain'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TrustKey'])) {
            $model->trustKey = $map['TrustKey'];
        }

        return $model;
    }
}
