<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveInteractionMetricDataRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     *
     * @example e4d7f08a-01fe-41b5-a091-fe41060a****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1698195600000
     *
     * @var int
     */
    public $beginTs;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     *
     * @example 1698201013000
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The metric. Valid values:
     *
     *   JoinChannelSucRate: the success rate of joining a channel within 5 seconds.
     *   VideoStuckRate: the video stuttering rate.
     *   AudioStuckRate: the audio stuttering rate.
     *   FirstFrameCost: the time to first frame.
     *
     * This parameter is required.
     *
     * @example FirstFrameCost
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The operating system. Valid values: iOS and Android.
     *
     * @example Android
     *
     * @var string
     */
    public $os;

    /**
     * @description The terminal type. Valid values: web and mobile.
     *
     * @example mobile
     *
     * @var string
     */
    public $terminalType;
    protected $_name = [
        'appId' => 'AppId',
        'beginTs' => 'BeginTs',
        'endTs' => 'EndTs',
        'metricType' => 'MetricType',
        'os' => 'Os',
        'terminalType' => 'TerminalType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->beginTs) {
            $res['BeginTs'] = $this->beginTs;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveInteractionMetricDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BeginTs'])) {
            $model->beginTs = $map['BeginTs'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        return $model;
    }
}
