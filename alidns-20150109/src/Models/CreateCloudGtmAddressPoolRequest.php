<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudGtmAddressPoolRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US (default): English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Address pool name, helping users distinguish the purpose of address pools.
     *
     * @example Address pool-1
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @description The type of the address pool. Valid values:
     *
     *   IPv4: IPv4 addresses are returned for Domain Name System (DNS) resolution.
     *   IPv6: IPv6 addresses are returned for DNS resolution.
     *   domain: Domain names are returned for DNS resolution.
     *
     * @example IPv4
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The enabling state of the address pool. Valid values:
     *
     *   enable: The address pool is enabled, and the addresses in the address pool are returned for DNS resolution when the health check results are normal.
     *   disable: The address pool is disabled, and the addresses in the address pool are not returned for DNS resolution regardless of whether the health check results are normal or not.
     *
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @description The condition for determining the health status of the address pool. Valid values:
     *
     *   any_ok: At least one address in the address pool is available.
     *   p30_ok: At least 30% of the addresses in the address pool are available.
     *   p50_ok: At least 50% of the addresses in the address pool are available.
     *   p70_ok: At least 70% of the addresses in the address pool are available.
     *   all_ok: All addresses in the address pool are available.
     *
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @description Remarks for the address pool, helping users distinguish the usage scenarios of different address pools.
     *
     * @example app
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolName' => 'AddressPoolName',
        'addressPoolType' => 'AddressPoolType',
        'clientToken' => 'ClientToken',
        'enableStatus' => 'EnableStatus',
        'healthJudgement' => 'HealthJudgement',
        'remark' => 'Remark',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }
        if (null !== $this->addressPoolType) {
            $res['AddressPoolType'] = $this->addressPoolType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPoolName'])) {
            $model->addressPoolName = $map['AddressPoolName'];
        }
        if (isset($map['AddressPoolType'])) {
            $model->addressPoolType = $map['AddressPoolType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
