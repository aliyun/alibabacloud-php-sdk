<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class AddGroupDnsAuthorizationRuleRequest extends Model
{
    /**
     * @example TF-******-1633255280-43c94bf7-2dd3-4c14-8
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example ar5gg-test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1.1.1.1
     *
     * @var string
     */
    public $destinationIp;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 114.114.114.114
     *
     * @var string
     */
    public $sourceDNSIp;

    /**
     * @description This parameter is required.
     *
     * @example cc5gg-****
     *
     * @var string
     */
    public $wirelessCloudConnectorGroupId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'description'                   => 'Description',
        'destinationIp'                 => 'DestinationIp',
        'dryRun'                        => 'DryRun',
        'name'                          => 'Name',
        'sourceDNSIp'                   => 'SourceDNSIp',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceDNSIp) {
            $res['SourceDNSIp'] = $this->sourceDNSIp;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGroupDnsAuthorizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceDNSIp'])) {
            $model->sourceDNSIp = $map['SourceDNSIp'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }

        return $model;
    }
}
