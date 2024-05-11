<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;

use AlibabaCloud\Tea\Model;

class sliceDetails extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1685245261939
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @example {\\"consoleProduct\\":\\"slbnext\\"}
     *
     * @var string
     */
    public $extend;

    /**
     * @example porn
     *
     * @var string
     */
    public $labels;

    /**
     * @example ""
     *
     * @var string
     */
    public $riskTips;

    /**
     * @example ""
     *
     * @var string
     */
    public $riskWords;

    /**
     * @example 5
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
     * @example 1659935002123
     *
     * @var int
     */
    public $startTimestamp;

    /**
     * @var string
     */
    public $text;

    /**
     * @example http://xxxx.abc.img
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'endTime'        => 'EndTime',
        'endTimestamp'   => 'EndTimestamp',
        'extend'         => 'Extend',
        'labels'         => 'Labels',
        'riskTips'       => 'RiskTips',
        'riskWords'      => 'RiskWords',
        'score'          => 'Score',
        'startTime'      => 'StartTime',
        'startTimestamp' => 'StartTimestamp',
        'text'           => 'Text',
        'url'            => 'Url',
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
