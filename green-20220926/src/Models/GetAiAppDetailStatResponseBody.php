<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class GetAiAppDetailStatResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var float
     */
    public $avgModelDuration;

    /**
     * @var float
     */
    public $avgModelDurationDau;

    /**
     * @var int
     */
    public $modelCount;

    /**
     * @var float
     */
    public $modelCountDau;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskEventCount;

    /**
     * @var int
     */
    public $tokenCount;

    /**
     * @var float
     */
    public $tokenCountDau;
    protected $_name = [
        'appId' => 'AppId',
        'avgModelDuration' => 'AvgModelDuration',
        'avgModelDurationDau' => 'AvgModelDurationDau',
        'modelCount' => 'ModelCount',
        'modelCountDau' => 'ModelCountDau',
        'requestId' => 'RequestId',
        'riskEventCount' => 'RiskEventCount',
        'tokenCount' => 'TokenCount',
        'tokenCountDau' => 'TokenCountDau',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->avgModelDuration) {
            $res['AvgModelDuration'] = $this->avgModelDuration;
        }

        if (null !== $this->avgModelDurationDau) {
            $res['AvgModelDurationDau'] = $this->avgModelDurationDau;
        }

        if (null !== $this->modelCount) {
            $res['ModelCount'] = $this->modelCount;
        }

        if (null !== $this->modelCountDau) {
            $res['ModelCountDau'] = $this->modelCountDau;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskEventCount) {
            $res['RiskEventCount'] = $this->riskEventCount;
        }

        if (null !== $this->tokenCount) {
            $res['TokenCount'] = $this->tokenCount;
        }

        if (null !== $this->tokenCountDau) {
            $res['TokenCountDau'] = $this->tokenCountDau;
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

        if (isset($map['AvgModelDuration'])) {
            $model->avgModelDuration = $map['AvgModelDuration'];
        }

        if (isset($map['AvgModelDurationDau'])) {
            $model->avgModelDurationDau = $map['AvgModelDurationDau'];
        }

        if (isset($map['ModelCount'])) {
            $model->modelCount = $map['ModelCount'];
        }

        if (isset($map['ModelCountDau'])) {
            $model->modelCountDau = $map['ModelCountDau'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskEventCount'])) {
            $model->riskEventCount = $map['RiskEventCount'];
        }

        if (isset($map['TokenCount'])) {
            $model->tokenCount = $map['TokenCount'];
        }

        if (isset($map['TokenCountDau'])) {
            $model->tokenCountDau = $map['TokenCountDau'];
        }

        return $model;
    }
}
