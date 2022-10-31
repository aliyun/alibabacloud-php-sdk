<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupDnsAuthorizationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $destinationIp;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sourceDNSIp;

    /**
     * @var string
     */
    public $wirelessCloudConnectorGroupId;
    protected $_name = [
        'authorizationRuleId'           => 'AuthorizationRuleId',
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
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
        }
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
     * @return UpdateGroupDnsAuthorizationRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
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
