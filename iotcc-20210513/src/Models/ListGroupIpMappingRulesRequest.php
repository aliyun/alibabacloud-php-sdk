<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListGroupIpMappingRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $destinationIps;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string[]
     */
    public $ipMappingRuleIds;

    /**
     * @var string[]
     */
    public $ipMappingRuleNames;

    /**
     * @var string[]
     */
    public $ipMappingRuleStatuses;

    /**
     * @var string[]
     */
    public $mappingIps;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'destinationIps'           => 'DestinationIps',
        'ioTCloudConnectorGroupId' => 'IoTCloudConnectorGroupId',
        'ipMappingRuleIds'         => 'IpMappingRuleIds',
        'ipMappingRuleNames'       => 'IpMappingRuleNames',
        'ipMappingRuleStatuses'    => 'IpMappingRuleStatuses',
        'mappingIps'               => 'MappingIps',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'regionId'                 => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationIps) {
            $res['DestinationIps'] = $this->destinationIps;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->ipMappingRuleIds) {
            $res['IpMappingRuleIds'] = $this->ipMappingRuleIds;
        }
        if (null !== $this->ipMappingRuleNames) {
            $res['IpMappingRuleNames'] = $this->ipMappingRuleNames;
        }
        if (null !== $this->ipMappingRuleStatuses) {
            $res['IpMappingRuleStatuses'] = $this->ipMappingRuleStatuses;
        }
        if (null !== $this->mappingIps) {
            $res['MappingIps'] = $this->mappingIps;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupIpMappingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationIps'])) {
            if (!empty($map['DestinationIps'])) {
                $model->destinationIps = $map['DestinationIps'];
            }
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['IpMappingRuleIds'])) {
            if (!empty($map['IpMappingRuleIds'])) {
                $model->ipMappingRuleIds = $map['IpMappingRuleIds'];
            }
        }
        if (isset($map['IpMappingRuleNames'])) {
            if (!empty($map['IpMappingRuleNames'])) {
                $model->ipMappingRuleNames = $map['IpMappingRuleNames'];
            }
        }
        if (isset($map['IpMappingRuleStatuses'])) {
            if (!empty($map['IpMappingRuleStatuses'])) {
                $model->ipMappingRuleStatuses = $map['IpMappingRuleStatuses'];
            }
        }
        if (isset($map['MappingIps'])) {
            if (!empty($map['MappingIps'])) {
                $model->mappingIps = $map['MappingIps'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
