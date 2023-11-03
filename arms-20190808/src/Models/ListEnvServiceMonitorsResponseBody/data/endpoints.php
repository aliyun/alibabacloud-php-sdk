<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsResponseBody\data;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The collection interval.
     *
     * @example 30s
     *
     * @var string
     */
    public $interval;

    /**
     * @description The number of pods that match the ServiceMonitor endpoint.
     *
     * @example 1
     *
     * @var int
     */
    public $matchedTargetCount;

    /**
     * @description The collection path.
     *
     * @example /metrics
     *
     * @var string
     */
    public $path;

    /**
     * @description The external port.
     *
     * @example 9101
     *
     * @var string
     */
    public $port;

    /**
     * @description The destination port.
     *
     * @example 443
     *
     * @var int
     */
    public $targetPort;
    protected $_name = [
        'interval'           => 'Interval',
        'matchedTargetCount' => 'MatchedTargetCount',
        'path'               => 'Path',
        'port'               => 'Port',
        'targetPort'         => 'TargetPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->matchedTargetCount) {
            $res['MatchedTargetCount'] = $this->matchedTargetCount;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['MatchedTargetCount'])) {
            $model->matchedTargetCount = $map['MatchedTargetCount'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        return $model;
    }
}
