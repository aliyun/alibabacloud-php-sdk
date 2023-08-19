<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AdvanceSecurityEventOperationsRequest extends Model
{
    /**
     * @description The alert name.
     *
     * @example Execution of malicious script code
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The alert event type. Valid values:
     *
     *   Suspicious process
     *   Webshell
     *   Unusual logon
     *   Exception
     *   Sensitive file tampering
     *   Malicious process (cloud threat detection)
     *   Unusual network connection
     *   Abnormal account
     *   Application intrusion event
     *   Cloud threat detection
     *   Precision defense
     *   Application whitelist
     *   Persistent webshell
     *   Web application threat detection
     *   Malicious script
     *   Threat intelligence
     *   Malicious network activity
     *   Cluster exception
     *   Webshell (on-premises threat detection)
     *   Vulnerability exploitation
     *   Malicious process (on-premises threat detection)
     *   Trusted exception
     *   Others
     *
     * For more information about alert types, see [Alerts](~~68388~~).
     * @example Malicious script
     *
     * @var string
     */
    public $eventType;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The rule ID.
     *
     * @example 123
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'eventName'       => 'EventName',
        'eventType'       => 'EventType',
        'resourceOwnerId' => 'ResourceOwnerId',
        'ruleId'          => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdvanceSecurityEventOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
