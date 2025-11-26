<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInternetTimeTopRequest extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $IPType;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $natIP;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $sourceCode;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $srcIP;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $trafficTime;

    /**
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'IPType' => 'IPType',
        'interval' => 'Interval',
        'lang' => 'Lang',
        'limit' => 'Limit',
        'natIP' => 'NatIP',
        'order' => 'Order',
        'sort' => 'Sort',
        'sourceCode' => 'SourceCode',
        'sourceIp' => 'SourceIp',
        'srcIP' => 'SrcIP',
        'startTime' => 'StartTime',
        'trafficTime' => 'TrafficTime',
        'trafficType' => 'TrafficType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->natIP) {
            $res['NatIP'] = $this->natIP;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }

        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        if (null !== $this->srcIP) {
            $res['SrcIP'] = $this->srcIP;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->trafficTime) {
            $res['TrafficTime'] = $this->trafficTime;
        }

        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
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
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['NatIP'])) {
            $model->natIP = $map['NatIP'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }

        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        if (isset($map['SrcIP'])) {
            $model->srcIP = $map['SrcIP'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TrafficTime'])) {
            $model->trafficTime = $map['TrafficTime'];
        }

        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
