<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\honeypotEvents\mergeFieldList;
use AlibabaCloud\Tea\Model;

class honeypotEvents extends Model
{
    /**
     * @description The probe ID.
     *
     * @example 27d44bd5815d401992ea672874d9****
     *
     * @var string
     */
    public $agentId;

    /**
     * @description The name of the probe.
     *
     * @example 1193474_test_****
     *
     * @var string
     */
    public $agentName;

    /**
     * @description The ID of the alert event.
     *
     * @example 1900752
     *
     * @var int
     */
    public $alarmEventId;

    /**
     * @description The destination IP address of the attack.
     *
     * @example 112.126.205.***
     *
     * @var string
     */
    public $dstIp;

    /**
     * @description The timestamp at which the event was first detected.
     *
     * @example 1692670297
     *
     * @var int
     */
    public $firstTime;

    /**
     * @description The name of the honeypot.
     *
     * @example honeypot-2
     *
     * @var string
     */
    public $honeypotName;

    /**
     * @description The timestamp at which the event was last detected.
     *
     * @example 1676558664
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The region.
     *
     * @example China Beijing
     *
     * @var string
     */
    public $location;

    /**
     * @description The extended values that correspond to the field key.
     *
     * @var mergeFieldList[]
     */
    public $mergeFieldList;

    /**
     * @description The protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example tcp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The risk level. Valid values:
     *
     *   **2**: low
     *   **3**: medium
     *   **4**: high
     *
     * @example 4
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The ID of the intrusion event.
     *
     * @example 70427821
     *
     * @var int
     */
    public $securityEventId;

    /**
     * @description The source IP address of the attack.
     *
     * @example 192.168.62.***
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'agentId'         => 'AgentId',
        'agentName'       => 'AgentName',
        'alarmEventId'    => 'AlarmEventId',
        'dstIp'           => 'DstIp',
        'firstTime'       => 'FirstTime',
        'honeypotName'    => 'HoneypotName',
        'lastTime'        => 'LastTime',
        'location'        => 'Location',
        'mergeFieldList'  => 'MergeFieldList',
        'protocol'        => 'Protocol',
        'riskLevel'       => 'RiskLevel',
        'securityEventId' => 'SecurityEventId',
        'srcIp'           => 'SrcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->alarmEventId) {
            $res['AlarmEventId'] = $this->alarmEventId;
        }
        if (null !== $this->dstIp) {
            $res['DstIp'] = $this->dstIp;
        }
        if (null !== $this->firstTime) {
            $res['FirstTime'] = $this->firstTime;
        }
        if (null !== $this->honeypotName) {
            $res['HoneypotName'] = $this->honeypotName;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->mergeFieldList) {
            $res['MergeFieldList'] = [];
            if (null !== $this->mergeFieldList && \is_array($this->mergeFieldList)) {
                $n = 0;
                foreach ($this->mergeFieldList as $item) {
                    $res['MergeFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return honeypotEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['AlarmEventId'])) {
            $model->alarmEventId = $map['AlarmEventId'];
        }
        if (isset($map['DstIp'])) {
            $model->dstIp = $map['DstIp'];
        }
        if (isset($map['FirstTime'])) {
            $model->firstTime = $map['FirstTime'];
        }
        if (isset($map['HoneypotName'])) {
            $model->honeypotName = $map['HoneypotName'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MergeFieldList'])) {
            if (!empty($map['MergeFieldList'])) {
                $model->mergeFieldList = [];
                $n                     = 0;
                foreach ($map['MergeFieldList'] as $item) {
                    $model->mergeFieldList[$n++] = null !== $item ? mergeFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
