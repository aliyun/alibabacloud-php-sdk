<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListDNSServiceRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $DNSServiceRuleIds;

    /**
     * @var string[]
     */
    public $DNSServiceRuleName;

    /**
     * @var string[]
     */
    public $DNSServiceRuleStatus;

    /**
     * @var string[]
     */
    public $destination;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

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

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string[]
     */
    public $source;
    protected $_name = [
        'DNSServiceRuleIds'    => 'DNSServiceRuleIds',
        'DNSServiceRuleName'   => 'DNSServiceRuleName',
        'DNSServiceRuleStatus' => 'DNSServiceRuleStatus',
        'destination'          => 'Destination',
        'ioTCloudConnectorId'  => 'IoTCloudConnectorId',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'regionId'             => 'RegionId',
        'serviceType'          => 'ServiceType',
        'source'               => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSServiceRuleIds) {
            $res['DNSServiceRuleIds'] = $this->DNSServiceRuleIds;
        }
        if (null !== $this->DNSServiceRuleName) {
            $res['DNSServiceRuleName'] = $this->DNSServiceRuleName;
        }
        if (null !== $this->DNSServiceRuleStatus) {
            $res['DNSServiceRuleStatus'] = $this->DNSServiceRuleStatus;
        }
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
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
     * @return ListDNSServiceRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSServiceRuleIds'])) {
            if (!empty($map['DNSServiceRuleIds'])) {
                $model->DNSServiceRuleIds = $map['DNSServiceRuleIds'];
            }
        }
        if (isset($map['DNSServiceRuleName'])) {
            if (!empty($map['DNSServiceRuleName'])) {
                $model->DNSServiceRuleName = $map['DNSServiceRuleName'];
            }
        }
        if (isset($map['DNSServiceRuleStatus'])) {
            if (!empty($map['DNSServiceRuleStatus'])) {
                $model->DNSServiceRuleStatus = $map['DNSServiceRuleStatus'];
            }
        }
        if (isset($map['Destination'])) {
            if (!empty($map['Destination'])) {
                $model->destination = $map['Destination'];
            }
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
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
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Source'])) {
            if (!empty($map['Source'])) {
                $model->source = $map['Source'];
            }
        }

        return $model;
    }
}
