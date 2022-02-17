<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListAuthorizationRulesResponseBody;

use AlibabaCloud\Tea\Model;

class authorizationRules extends Model
{
    /**
     * @var string
     */
    public $authorizationRuleDescription;

    /**
     * @var string
     */
    public $authorizationRuleId;

    /**
     * @var string
     */
    public $authorizationRuleName;

    /**
     * @var string
     */
    public $authorizationRuleStatus;

    /**
     * @var string
     */
    public $authorizationRuleType;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string[]
     */
    public $sourceCidrs;
    protected $_name = [
        'authorizationRuleDescription' => 'AuthorizationRuleDescription',
        'authorizationRuleId'          => 'AuthorizationRuleId',
        'authorizationRuleName'        => 'AuthorizationRuleName',
        'authorizationRuleStatus'      => 'AuthorizationRuleStatus',
        'authorizationRuleType'        => 'AuthorizationRuleType',
        'destination'                  => 'Destination',
        'destinationType'              => 'DestinationType',
        'ioTCloudConnectorId'          => 'IoTCloudConnectorId',
        'policy'                       => 'Policy',
        'sourceCidrs'                  => 'SourceCidrs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationRuleDescription) {
            $res['AuthorizationRuleDescription'] = $this->authorizationRuleDescription;
        }
        if (null !== $this->authorizationRuleId) {
            $res['AuthorizationRuleId'] = $this->authorizationRuleId;
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
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->sourceCidrs) {
            $res['SourceCidrs'] = $this->sourceCidrs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizationRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationRuleDescription'])) {
            $model->authorizationRuleDescription = $map['AuthorizationRuleDescription'];
        }
        if (isset($map['AuthorizationRuleId'])) {
            $model->authorizationRuleId = $map['AuthorizationRuleId'];
        }
        if (isset($map['AuthorizationRuleName'])) {
            $model->authorizationRuleName = $map['AuthorizationRuleName'];
        }
        if (isset($map['AuthorizationRuleStatus'])) {
            $model->authorizationRuleStatus = $map['AuthorizationRuleStatus'];
        }
        if (isset($map['AuthorizationRuleType'])) {
            $model->authorizationRuleType = $map['AuthorizationRuleType'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['SourceCidrs'])) {
            if (!empty($map['SourceCidrs'])) {
                $model->sourceCidrs = $map['SourceCidrs'];
            }
        }

        return $model;
    }
}
