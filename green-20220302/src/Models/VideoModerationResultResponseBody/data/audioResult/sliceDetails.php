<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\audioResult;

use AlibabaCloud\Dara\Model;

class sliceDetails extends Model
{
    /**
     * @var string
     */
    public $descriptions;
    /**
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
     * @var string
     */
    public $labels;
    /**
     * @var string
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $riskTips;
    /**
     * @var string
     */
    public $riskWords;
    /**
     * @var float
     */
    public $score;
    /**
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
        'descriptions'   => 'Descriptions',
        'endTime'        => 'EndTime',
        'endTimestamp'   => 'EndTimestamp',
        'extend'         => 'Extend',
        'labels'         => 'Labels',
        'riskLevel'      => 'RiskLevel',
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->descriptions) {
            $res['Descriptions'] = $this->descriptions;
        }

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

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Descriptions'])) {
            $model->descriptions = $map['Descriptions'];
        }

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

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
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
