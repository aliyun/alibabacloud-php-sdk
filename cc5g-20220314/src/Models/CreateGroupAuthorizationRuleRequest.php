<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupAuthorizationRuleRequest extends Model
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
     * @description This parameter is required.
     *
     * @example 106.14.175.4
     *
     * @var string
     */
    public $destination;

    /**
     * @example -1/-1
     *
     * @var string
     */
    public $destinationPort;

    /**
     * @description This parameter is required.
     *
     * @example Cidr
     *
     * @var string
     */
    public $destinationType;

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
     * @example Permit
     *
     * @var string
     */
    public $policy;

    /**
     * @example all
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidr;

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
        'destination'                   => 'Destination',
        'destinationPort'               => 'DestinationPort',
        'destinationType'               => 'DestinationType',
        'dryRun'                        => 'DryRun',
        'name'                          => 'Name',
        'policy'                        => 'Policy',
        'protocol'                      => 'Protocol',
        'sourceCidr'                    => 'SourceCidr',
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
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->sourceCidr) {
            $res['SourceCidr'] = $this->sourceCidr;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupAuthorizationRuleRequest
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['SourceCidr'])) {
            $model->sourceCidr = $map['SourceCidr'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }

        return $model;
    }
}
