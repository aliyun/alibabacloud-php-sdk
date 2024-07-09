<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class AddZoneRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 21079fa016944979537637959d09bc
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The logical location of the built-in authoritative module in which the zone is added. Valid values:
     *
     *   Normal zone: regular module
     *   Fast Zone: acceleration module
     *
     * @example FAST_ZONE
     *
     * @var string
     */
    public $dnsGroup;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description *   Specifies whether to enable the recursive resolution proxy feature for the zone. Valid values: **ZONE**: disables the recursive resolution proxy feature for the zone.
     *   **RECORD**: enables the recursive resolution proxy feature for the zone.
     *
     * @example ZONE
     *
     * @var string
     */
    public $proxyPattern;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-resourcegroupid1
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the zone.
     *
     * @example example.com
     *
     * @var string
     */
    public $zoneName;

    /**
     * @description This parameter is not available. You can ignore it.
     *
     * @example BLINK
     *
     * @var string
     */
    public $zoneTag;

    /**
     * @description This parameter is not available. You can ignore it.
     *
     * @example CLOUD_PRODUCT_ZONE
     *
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'dnsGroup'        => 'DnsGroup',
        'lang'            => 'Lang',
        'proxyPattern'    => 'ProxyPattern',
        'resourceGroupId' => 'ResourceGroupId',
        'zoneName'        => 'ZoneName',
        'zoneTag'         => 'ZoneTag',
        'zoneType'        => 'ZoneType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dnsGroup) {
            $res['DnsGroup'] = $this->dnsGroup;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->proxyPattern) {
            $res['ProxyPattern'] = $this->proxyPattern;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }
        if (null !== $this->zoneTag) {
            $res['ZoneTag'] = $this->zoneTag;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DnsGroup'])) {
            $model->dnsGroup = $map['DnsGroup'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ProxyPattern'])) {
            $model->proxyPattern = $map['ProxyPattern'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }
        if (isset($map['ZoneTag'])) {
            $model->zoneTag = $map['ZoneTag'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
