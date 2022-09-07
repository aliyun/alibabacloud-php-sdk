<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIpMappingRulesResponseBody;

use AlibabaCloud\Tea\Model;

class ipMappingRules extends Model
{
    /**
     * @var string
     */
    public $destinationIp;

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
    public $ipMappingRuleStatus;

    /**
     * @var string
     */
    public $mappingIp;
    protected $_name = [
        'destinationIp'            => 'DestinationIp',
        'ioTCloudConnectorId'      => 'IoTCloudConnectorId',
        'ipMappingRuleDescription' => 'IpMappingRuleDescription',
        'ipMappingRuleId'          => 'IpMappingRuleId',
        'ipMappingRuleName'        => 'IpMappingRuleName',
        'ipMappingRuleStatus'      => 'IpMappingRuleStatus',
        'mappingIp'                => 'MappingIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationIp) {
            $res['DestinationIp'] = $this->destinationIp;
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
        if (null !== $this->ipMappingRuleStatus) {
            $res['IpMappingRuleStatus'] = $this->ipMappingRuleStatus;
        }
        if (null !== $this->mappingIp) {
            $res['MappingIp'] = $this->mappingIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipMappingRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationIp'])) {
            $model->destinationIp = $map['DestinationIp'];
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
        if (isset($map['IpMappingRuleStatus'])) {
            $model->ipMappingRuleStatus = $map['IpMappingRuleStatus'];
        }
        if (isset($map['MappingIp'])) {
            $model->mappingIp = $map['MappingIp'];
        }

        return $model;
    }
}
