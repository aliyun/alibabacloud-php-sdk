<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListGroupDNSServiceRulesResponseBody;

use AlibabaCloud\Tea\Model;

class DNSServiceRules extends Model
{
    /**
     * @var string
     */
    public $DNSServiceRuleDescription;

    /**
     * @var string
     */
    public $DNSServiceRuleId;

    /**
     * @var string
     */
    public $DNSServiceRuleName;

    /**
     * @var string
     */
    public $DNSServiceRuleStatus;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'DNSServiceRuleDescription' => 'DNSServiceRuleDescription',
        'DNSServiceRuleId'          => 'DNSServiceRuleId',
        'DNSServiceRuleName'        => 'DNSServiceRuleName',
        'DNSServiceRuleStatus'      => 'DNSServiceRuleStatus',
        'destination'               => 'Destination',
        'ioTCloudConnectorGroupId'  => 'IoTCloudConnectorGroupId',
        'serviceType'               => 'ServiceType',
        'source'                    => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DNSServiceRuleDescription) {
            $res['DNSServiceRuleDescription'] = $this->DNSServiceRuleDescription;
        }
        if (null !== $this->DNSServiceRuleId) {
            $res['DNSServiceRuleId'] = $this->DNSServiceRuleId;
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
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
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
     * @return DNSServiceRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DNSServiceRuleDescription'])) {
            $model->DNSServiceRuleDescription = $map['DNSServiceRuleDescription'];
        }
        if (isset($map['DNSServiceRuleId'])) {
            $model->DNSServiceRuleId = $map['DNSServiceRuleId'];
        }
        if (isset($map['DNSServiceRuleName'])) {
            $model->DNSServiceRuleName = $map['DNSServiceRuleName'];
        }
        if (isset($map['DNSServiceRuleStatus'])) {
            $model->DNSServiceRuleStatus = $map['DNSServiceRuleStatus'];
        }
        if (isset($map['Destination'])) {
            $model->destination = $map['Destination'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
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
