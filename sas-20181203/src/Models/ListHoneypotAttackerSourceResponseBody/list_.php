<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListHoneypotAttackerSourceResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $eventCount;
    /**
     * @var string
     */
    public $lastTargetHoneypot;
    /**
     * @var string
     */
    public $lastTargetIp;
    /**
     * @var int
     */
    public $lastTime;
    /**
     * @var string
     */
    public $riskLevel;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
