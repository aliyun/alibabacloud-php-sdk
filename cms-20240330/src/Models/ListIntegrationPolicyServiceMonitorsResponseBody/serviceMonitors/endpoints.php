<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyServiceMonitorsResponseBody\serviceMonitors;

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
     * @var string
     */
    public $targetPort;
    protected $_name = [
        'interval' => 'interval',
        'matchedTargetCount' => 'matchedTargetCount',
        'path' => 'path',
        'port' => 'port',
        'targetPort' => 'targetPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }

        if (null !== $this->matchedTargetCount) {
            $res['matchedTargetCount'] = $this->matchedTargetCount;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->targetPort) {
            $res['targetPort'] = $this->targetPort;
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
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        if (isset($map['matchedTargetCount'])) {
            $model->matchedTargetCount = $map['matchedTargetCount'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['targetPort'])) {
            $model->targetPort = $map['targetPort'];
        }

        return $model;
    }
}
