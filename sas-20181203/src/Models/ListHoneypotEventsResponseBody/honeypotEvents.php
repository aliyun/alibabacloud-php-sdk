<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotEventsResponseBody\honeypotEvents\mergeFieldList;

class honeypotEvents extends Model
{
    /**
     * @var string
     */
    public $agentId;
    /**
     * @var string
     */
    public $agentName;
    /**
     * @var int
     */
    public $alarmEventId;
    /**
     * @var string
     */
    public $dstIp;
    /**
     * @var int
     */
    public $firstTime;
    /**
     * @var string
     */
    public $honeypotName;
    /**
     * @var int
     */
    public $lastTime;
    /**
     * @var string
     */
    public $location;
    /**
     * @var mergeFieldList[]
     */
    public $mergeFieldList;
    /**
     * @var string
     */
    public $protocol;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var int
     */
    public $securityEventId;
    /**
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
        if (\is_array($this->mergeFieldList)) {
            Model::validateArray($this->mergeFieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->mergeFieldList)) {
                $res['MergeFieldList'] = [];
                $n1                    = 0;
                foreach ($this->mergeFieldList as $item1) {
                    $res['MergeFieldList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                    = 0;
                foreach ($map['MergeFieldList'] as $item1) {
                    $model->mergeFieldList[$n1++] = mergeFieldList::fromMap($item1);
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
