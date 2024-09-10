<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureRiskListResponseBody;

use AlibabaCloud\Tea\Model;

class riskList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @example test.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example globalsign
     *
     * @var string
     */
    public $sslBrand;

    /**
     * @example 1
     *
     * @var int
     */
    public $sslStatus;

    /**
     * @var string[]
     */
    public $uuidList;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'domain'     => 'Domain',
        'sslBrand'   => 'SslBrand',
        'sslStatus'  => 'SslStatus',
        'uuidList'   => 'UuidList',
        'vulCount'   => 'VulCount',
    ];

    public function validate()
    {
    }

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
