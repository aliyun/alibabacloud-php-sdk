<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VoiceModerationResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class sliceDetails extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $extend;

    /**
     * @example sexual_sounds
     *
     * @var string
     */
    public $labels;

    /**
     * @var mixed[]
     */
    public $originAlgoResult;

    /**
     * @var string
     */
    public $riskTips;

    /**
     * @var string
     */
    public $riskWords;

    /**
     * @example 87.01
     *
     * @var float
     */
    public $score;

    /**
     * @example 0
     *
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'endTime'          => 'EndTime',
        'endTimestamp'     => 'EndTimestamp',
        'extend'           => 'Extend',
        'labels'           => 'Labels',
        'originAlgoResult' => 'OriginAlgoResult',
        'riskTips'         => 'RiskTips',
        'riskWords'        => 'RiskWords',
        'score'            => 'Score',
        'startTime'        => 'StartTime',
        'startTimestamp'   => 'StartTimestamp',
        'text'             => 'Text',
        'url'              => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->originAlgoResult) {
            $res['OriginAlgoResult'] = $this->originAlgoResult;
        }
        if (null !== $this->riskTips) {
            $res['RiskTips'] = $this->riskTips;
        }
        if (null !== $this->riskWords) {
            $res['RiskWords'] = $this->riskWords;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sliceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['OriginAlgoResult'])) {
            $model->originAlgoResult = $map['OriginAlgoResult'];
        }
        if (isset($map['RiskTips'])) {
            $model->riskTips = $map['RiskTips'];
        }
        if (isset($map['RiskWords'])) {
            $model->riskWords = $map['RiskWords'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
