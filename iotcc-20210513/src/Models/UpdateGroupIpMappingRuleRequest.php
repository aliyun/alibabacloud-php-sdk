<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateGroupIpMappingRuleRequest extends Model
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
    public $groupIpMappingRuleId;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $ipMappingRuleDescription;

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
        'groupIpMappingRuleId'     => 'GroupIpMappingRuleId',
        'ioTCloudConnectorGroupId' => 'IoTCloudConnectorGroupId',
        'ipMappingRuleDescription' => 'IpMappingRuleDescription',
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
        if (null !== $this->groupIpMappingRuleId) {
            $res['GroupIpMappingRuleId'] = $this->groupIpMappingRuleId;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->ipMappingRuleDescription) {
            $res['IpMappingRuleDescription'] = $this->ipMappingRuleDescription;
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
     * @return UpdateGroupIpMappingRuleRequest
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
        if (isset($map['GroupIpMappingRuleId'])) {
            $model->groupIpMappingRuleId = $map['GroupIpMappingRuleId'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['IpMappingRuleDescription'])) {
            $model->ipMappingRuleDescription = $map['IpMappingRuleDescription'];
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
