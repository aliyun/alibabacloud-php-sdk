<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvServiceMonitorsResponseBody\data;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $interval;
    /**
     * @var int
     */
    public $matchedTargetCount;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $port;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
