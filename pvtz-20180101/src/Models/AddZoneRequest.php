<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class AddZoneRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dnsGroup;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $proxyPattern;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var string
     */
    public $zoneTag;

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dnsGroup' => 'DnsGroup',
        'lang' => 'Lang',
        'proxyPattern' => 'ProxyPattern',
        'resourceGroupId' => 'ResourceGroupId',
        'zoneName' => 'ZoneName',
        'zoneTag' => 'ZoneTag',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
