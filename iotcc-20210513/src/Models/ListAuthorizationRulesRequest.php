<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListAuthorizationRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $authorizationRuleIds;

    /**
     * @var string[]
     */
    public $authorizationRuleName;

    /**
     * @var string[]
     */
    public $authorizationRuleStatus;

    /**
     * @var string
     */
    public $authorizationRuleType;

    /**
     * @var string[]
     */
    public $destination;

    /**
     * @var string[]
     */
    public $destinationPort;

    /**
     * @var string[]
     */
    public $destinationType;

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
     * @var string[]
     */
    public $policy;

    /**
     * @var string[]
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authorizationRuleIds'    => 'AuthorizationRuleIds',
        'authorizationRuleName'   => 'AuthorizationRuleName',
        'authorizationRuleStatus' => 'AuthorizationRuleStatus',
        'authorizationRuleType'   => 'AuthorizationRuleType',
        'destination'             => 'Destination',
        'destinationPort'         => 'DestinationPort',
        'destinationType'         => 'DestinationType',
        'ioTCloudConnectorId'     => 'IoTCloudConnectorId',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'policy'                  => 'Policy',
        'protocol'                => 'Protocol',
        'regionId'                => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleIds) {
            $res['AuthorizationRuleIds'] = $this->authorizationRuleIds;
        }
        if (null !== $this->authorizationRuleName) {
            $res['AuthorizationRuleName'] = $this->authorizationRuleName;
        }
        if (null !== $this->authorizationRuleStatus) {
            $res['AuthorizationRuleStatus'] = $this->authorizationRuleStatus;
        }
        if (null !== $this->authorizationRuleType) {
            $res['AuthorizationRuleType'] = $this->authorizationRuleType;
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
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuthorizationRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleIds'])) {
            if (!empty($map['AuthorizationRuleIds'])) {
                $model->authorizationRuleIds = $map['AuthorizationRuleIds'];
            }
        }
        if (isset($map['AuthorizationRuleName'])) {
            if (!empty($map['AuthorizationRuleName'])) {
                $model->authorizationRuleName = $map['AuthorizationRuleName'];
            }
        }
        if (isset($map['AuthorizationRuleStatus'])) {
            if (!empty($map['AuthorizationRuleStatus'])) {
                $model->authorizationRuleStatus = $map['AuthorizationRuleStatus'];
            }
        }
        if (isset($map['AuthorizationRuleType'])) {
            $model->authorizationRuleType = $map['AuthorizationRuleType'];
        }
        if (isset($map['Destination'])) {
            if (!empty($map['Destination'])) {
                $model->destination = $map['Destination'];
            }
        }
        if (isset($map['DestinationPort'])) {
            if (!empty($map['DestinationPort'])) {
                $model->destinationPort = $map['DestinationPort'];
            }
        }
        if (isset($map['DestinationType'])) {
            if (!empty($map['DestinationType'])) {
                $model->destinationType = $map['DestinationType'];
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
        if (isset($map['Policy'])) {
            if (!empty($map['Policy'])) {
                $model->policy = $map['Policy'];
            }
        }
        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = $map['Protocol'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
