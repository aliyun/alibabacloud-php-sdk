<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateDNSServiceRuleAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $authorizationRuleName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $DNSServiceRuleDescription;

    /**
     * @var string
     */
    public $DNSServiceRuleId;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'authorizationRuleName'     => 'AuthorizationRuleName',
        'clientToken'               => 'ClientToken',
        'DNSServiceRuleDescription' => 'DNSServiceRuleDescription',
        'DNSServiceRuleId'          => 'DNSServiceRuleId',
        'destination'               => 'Destination',
        'dryRun'                    => 'DryRun',
        'ioTCloudConnectorId'       => 'IoTCloudConnectorId',
        'regionId'                  => 'RegionId',
        'serviceType'               => 'ServiceType',
        'source'                    => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DNSServiceRuleDescription) {
            $res['DNSServiceRuleDescription'] = $this->DNSServiceRuleDescription;
        }
        if (null !== $this->DNSServiceRuleId) {
            $res['DNSServiceRuleId'] = $this->DNSServiceRuleId;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDNSServiceRuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleName'])) {
            $model->authorizationRuleName = $map['AuthorizationRuleName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DNSServiceRuleDescription'])) {
            $model->DNSServiceRuleDescription = $map['DNSServiceRuleDescription'];
        }
        if (isset($map['DNSServiceRuleId'])) {
            $model->DNSServiceRuleId = $map['DNSServiceRuleId'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
