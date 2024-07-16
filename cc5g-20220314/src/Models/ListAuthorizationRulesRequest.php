<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListAuthorizationRulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $authorizationRuleIds;

    /**
     * @example 10.0.0.1
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
    public $dns;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
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
     * @var string[]
     */
    public $statuses;

    /**
     * @example System
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'authorizationRuleIds'     => 'AuthorizationRuleIds',
        'destination'              => 'Destination',
        'destinationPort'          => 'DestinationPort',
        'destinationType'          => 'DestinationType',
        'dns'                      => 'Dns',
        'maxResults'               => 'MaxResults',
        'names'                    => 'Names',
        'nextToken'                => 'NextToken',
        'policy'                   => 'Policy',
        'protocol'                 => 'Protocol',
        'statuses'                 => 'Statuses',
        'type'                     => 'Type',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
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
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationPort) {
            $res['DestinationPort'] = $this->destinationPort;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->dns) {
            $res['Dns'] = $this->dns;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
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
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationPort'])) {
            $model->destinationPort = $map['DestinationPort'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['Dns'])) {
            $model->dns = $map['Dns'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
