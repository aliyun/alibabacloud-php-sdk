<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ConfigADConnectorTrustRequest extends Model
{
    /**
     * @description The ID of the enterprise AD office network.
     *
     * This parameter is required.
     * @example cn-hangzhou+dir-778418****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description Specifies whether to configure a trust password for the Remote Desktop Services (RDS) License Domain of the enterprise AD office network.
     *
     * Valid values:
     *
     *   true: configures a trust password for the RDS License Domain of the AD office network.
     *
     *   false: configures a trust password for a regular enterprise AD office network.
     *
     * @example true
     *
     * @var bool
     */
    public $rdsLicenseDomain;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The trust password. You can specify the password when you configure a trust relationship between the AD domain and the ecd.acs domain.
     *
     * This parameter is required.
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
