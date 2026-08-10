<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\chart;
use AlibabaCloud\SDK\Green\V20220926\Models\GetAiAppDetailResponseBody\riskEvents;

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
     * @var chart
     */
    public $chart;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskEvents[]
     */
    public $riskEvents;

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
        'chart' => 'Chart',
        'requestId' => 'RequestId',
        'riskEvents' => 'RiskEvents',
        'score' => 'Score',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (null !== $this->chart) {
            $this->chart->validate();
        }
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

        if (null !== $this->chart) {
            $res['Chart'] = null !== $this->chart ? $this->chart->toArray($noStream) : $this->chart;
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

        if (isset($map['Chart'])) {
            $model->chart = chart::fromMap($map['Chart']);
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

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
