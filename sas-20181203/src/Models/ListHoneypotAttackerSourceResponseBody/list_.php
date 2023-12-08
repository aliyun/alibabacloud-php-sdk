<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerSourceResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The total number of attack events.
     *
     * @example 30
     *
     * @var int
     */
    public $eventCount;

    /**
     * @description The most recent honeypot that was attacked.
     *
     * @example vpc tcp honeypot
     *
     * @var string
     */
    public $lastTargetHoneypot;

    /**
     * @description The most recent IP address that was attacked.
     *
     * @example 144.23.66.***
     *
     * @var string
     */
    public $lastTargetIp;

    /**
     * @description The last time when the attack event occurred.
     *
     * @example 1693446913000
     *
     * @var int
     */
    public $lastTime;

    /**
     * @description The risk level. Valid values:
     *
     *   **2**: low
     *   **3**: medium
     *   **4**: high
     *
     * @example 2
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The source IP address of the attack.
     *
     * @example 101.102.61.***
     *
     * @var string
     */
    public $srcIp;
    protected $_name = [
        'eventCount'         => 'EventCount',
        'lastTargetHoneypot' => 'LastTargetHoneypot',
        'lastTargetIp'       => 'LastTargetIp',
        'lastTime'           => 'LastTime',
        'riskLevel'          => 'RiskLevel',
        'srcIp'              => 'SrcIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCount) {
            $res['EventCount'] = $this->eventCount;
        }
        if (null !== $this->lastTargetHoneypot) {
            $res['LastTargetHoneypot'] = $this->lastTargetHoneypot;
        }
        if (null !== $this->lastTargetIp) {
            $res['LastTargetIp'] = $this->lastTargetIp;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCount'])) {
            $model->eventCount = $map['EventCount'];
        }
        if (isset($map['LastTargetHoneypot'])) {
            $model->lastTargetHoneypot = $map['LastTargetHoneypot'];
        }
        if (isset($map['LastTargetIp'])) {
            $model->lastTargetIp = $map['LastTargetIp'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        return $model;
    }
}
