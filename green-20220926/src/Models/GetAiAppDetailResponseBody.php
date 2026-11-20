<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\chart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\property;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\riskEvents;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\riskStats;

class GetAiAppDetailResponseBody extends Model
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
    public $channel;

    /**
     * @var chart
     */
    public $chart;

    /**
     * @var property
     */
    public $property;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskEvents[]
     */
    public $riskEvents;

    /**
     * @var riskStats[]
     */
    public $riskStats;

    /**
     * @var int
     */
    public $score;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'channel' => 'Channel',
        'chart' => 'Chart',
        'property' => 'Property',
        'requestId' => 'RequestId',
        'riskEvents' => 'RiskEvents',
        'riskStats' => 'RiskStats',
        'score' => 'Score',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->chart) {
            $this->chart->validate();
        }
        if (null !== $this->property) {
            $this->property->validate();
        }
        if (\is_array($this->riskEvents)) {
            Model::validateArray($this->riskEvents);
        }
        if (\is_array($this->riskStats)) {
            Model::validateArray($this->riskStats);
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

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->chart) {
            $res['Chart'] = null !== $this->chart ? $this->chart->toArray($noStream) : $this->chart;
        }

        if (null !== $this->property) {
            $res['Property'] = null !== $this->property ? $this->property->toArray($noStream) : $this->property;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->riskStats) {
            if (\is_array($this->riskStats)) {
                $res['RiskStats'] = [];
                $n1 = 0;
                foreach ($this->riskStats as $item1) {
                    $res['RiskStats'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Chart'])) {
            $model->chart = chart::fromMap($map['Chart']);
        }

        if (isset($map['Property'])) {
            $model->property = property::fromMap($map['Property']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['RiskStats'])) {
            if (!empty($map['RiskStats'])) {
                $model->riskStats = [];
                $n1 = 0;
                foreach ($map['RiskStats'] as $item1) {
                    $model->riskStats[$n1] = riskStats::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
