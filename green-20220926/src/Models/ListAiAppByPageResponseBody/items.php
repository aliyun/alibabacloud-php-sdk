<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppByPageResponseBody\items\riskEvents;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appStatus;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $lastTraceTime;

    /**
     * @var riskEvents[]
     */
    public $riskEvents;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $traceStatus;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var int
     */
    public $warningCount;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appStatus' => 'AppStatus',
        'channel' => 'Channel',
        'lastTraceTime' => 'LastTraceTime',
        'riskEvents' => 'RiskEvents',
        'riskLevel' => 'RiskLevel',
        'traceStatus' => 'TraceStatus',
        'uid' => 'Uid',
        'warningCount' => 'WarningCount',
    ];

    public function validate()
    {
        if (\is_array($this->riskEvents)) {
            Model::validateArray($this->riskEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->lastTraceTime) {
            $res['LastTraceTime'] = $this->lastTraceTime;
        }

        if (null !== $this->riskEvents) {
            if (\is_array($this->riskEvents)) {
                $res['RiskEvents'] = [];
                $n1 = 0;
                foreach ($this->riskEvents as $item1) {
                    $res['RiskEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->traceStatus) {
            $res['TraceStatus'] = $this->traceStatus;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->warningCount) {
            $res['WarningCount'] = $this->warningCount;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['LastTraceTime'])) {
            $model->lastTraceTime = $map['LastTraceTime'];
        }

        if (isset($map['RiskEvents'])) {
            if (!empty($map['RiskEvents'])) {
                $model->riskEvents = [];
                $n1 = 0;
                foreach ($map['RiskEvents'] as $item1) {
                    $model->riskEvents[$n1] = riskEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['TraceStatus'])) {
            $model->traceStatus = $map['TraceStatus'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['WarningCount'])) {
            $model->warningCount = $map['WarningCount'];
        }

        return $model;
    }
}
