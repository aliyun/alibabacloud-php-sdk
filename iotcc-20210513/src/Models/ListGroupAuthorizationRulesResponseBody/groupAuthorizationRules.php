<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupAuthorizationRulesResponseBody;

use AlibabaCloud\Tea\Model;

class groupAuthorizationRules extends Model
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
    public $destination;

    /**
     * @var string
     */
    public $destinationType;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string[]
     */
    public $sourceCidrs;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authorizationRuleDescription' => 'AuthorizationRuleDescription',
        'authorizationRuleId'          => 'AuthorizationRuleId',
        'authorizationRuleName'        => 'AuthorizationRuleName',
        'authorizationRuleStatus'      => 'AuthorizationRuleStatus',
        'destination'                  => 'Destination',
        'destinationType'              => 'DestinationType',
        'ioTCloudConnectorGroupId'     => 'IoTCloudConnectorGroupId',
        'policy'                       => 'Policy',
        'sourceCidrs'                  => 'SourceCidrs',
        'type'                         => 'Type',
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
        if (null !== $this->destination) {
            $res['Destination'] = $this->destination;
        }
        if (null !== $this->destinationType) {
            $res['DestinationType'] = $this->destinationType;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->sourceCidrs) {
            $res['SourceCidrs'] = $this->sourceCidrs;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupAuthorizationRules
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
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['DestinationType'])) {
            $model->destinationType = $map['DestinationType'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['SourceCidrs'])) {
            if (!empty($map['SourceCidrs'])) {
                $model->sourceCidrs = $map['SourceCidrs'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
