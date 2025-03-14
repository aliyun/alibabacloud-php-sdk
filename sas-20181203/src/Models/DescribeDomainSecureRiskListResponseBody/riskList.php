<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureRiskListResponseBody;

use AlibabaCloud\Tea\Model;

class riskList extends Model
{
    /**
     * @description The number of alerts.
     *
     * @example 1
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The issuer of the certificate.
     *
     * @example globalsign
     *
     * @var string
     */
    public $sslBrand;

    /**
     * @description Indicates whether the certificate is configured. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $sslStatus;

    /**
     * @description The UUIDs of the backend servers of the website.
     *
     * @var string[]
     */
    public $uuidList;

    /**
     * @description The number of vulnerabilities.
     *
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'domain' => 'Domain',
        'sslBrand' => 'SslBrand',
        'sslStatus' => 'SslStatus',
        'uuidList' => 'UuidList',
        'vulCount' => 'VulCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->sslBrand) {
            $res['SslBrand'] = $this->sslBrand;
        }
        if (null !== $this->sslStatus) {
            $res['SslStatus'] = $this->sslStatus;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }
        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['SslBrand'])) {
            $model->sslBrand = $map['SslBrand'];
        }
        if (isset($map['SslStatus'])) {
            $model->sslStatus = $map['SslStatus'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }
        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
