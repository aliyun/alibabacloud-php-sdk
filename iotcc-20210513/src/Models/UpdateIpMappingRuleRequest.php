<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateIpMappingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

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
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $ipMappingRuleDescription;

    /**
     * @var string
     */
    public $ipMappingRuleId;

    /**
     * @var string
     */
    public $ipMappingRuleName;

    /**
     * @var string
     */
    public $mappingIp;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'              => 'ClientToken',
        'destinationIp'            => 'DestinationIp',
        'dryRun'                   => 'DryRun',
        'ioTCloudConnectorId'      => 'IoTCloudConnectorId',
        'ipMappingRuleDescription' => 'IpMappingRuleDescription',
        'ipMappingRuleId'          => 'IpMappingRuleId',
        'ipMappingRuleName'        => 'IpMappingRuleName',
        'mappingIp'                => 'MappingIp',
        'regionId'                 => 'RegionId',
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
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->ipMappingRuleDescription) {
            $res['IpMappingRuleDescription'] = $this->ipMappingRuleDescription;
        }
        if (null !== $this->ipMappingRuleId) {
            $res['IpMappingRuleId'] = $this->ipMappingRuleId;
        }
        if (null !== $this->ipMappingRuleName) {
            $res['IpMappingRuleName'] = $this->ipMappingRuleName;
        }
        if (null !== $this->mappingIp) {
            $res['MappingIp'] = $this->mappingIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIpMappingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['IpMappingRuleDescription'])) {
            $model->ipMappingRuleDescription = $map['IpMappingRuleDescription'];
        }
        if (isset($map['IpMappingRuleId'])) {
            $model->ipMappingRuleId = $map['IpMappingRuleId'];
        }
        if (isset($map['IpMappingRuleName'])) {
            $model->ipMappingRuleName = $map['IpMappingRuleName'];
        }
        if (isset($map['MappingIp'])) {
            $model->mappingIp = $map['MappingIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
