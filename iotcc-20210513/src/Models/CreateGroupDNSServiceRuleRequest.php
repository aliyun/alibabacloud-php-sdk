<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateGroupDNSServiceRuleRequest extends Model
{
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
    public $DNSServiceRuleName;

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
    public $ioTCloudConnectorGroupId;

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
        'clientToken'               => 'ClientToken',
        'DNSServiceRuleDescription' => 'DNSServiceRuleDescription',
        'DNSServiceRuleName'        => 'DNSServiceRuleName',
        'destination'               => 'Destination',
        'dryRun'                    => 'DryRun',
        'ioTCloudConnectorGroupId'  => 'IoTCloudConnectorGroupId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DNSServiceRuleDescription) {
            $res['DNSServiceRuleDescription'] = $this->DNSServiceRuleDescription;
        }
        if (null !== $this->DNSServiceRuleName) {
            $res['DNSServiceRuleName'] = $this->DNSServiceRuleName;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
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
     * @return CreateGroupDNSServiceRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DNSServiceRuleDescription'])) {
            $model->DNSServiceRuleDescription = $map['DNSServiceRuleDescription'];
        }
        if (isset($map['DNSServiceRuleName'])) {
            $model->DNSServiceRuleName = $map['DNSServiceRuleName'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
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
