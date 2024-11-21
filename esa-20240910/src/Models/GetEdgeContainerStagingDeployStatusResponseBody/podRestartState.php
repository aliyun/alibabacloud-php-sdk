<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerStagingDeployStatusResponseBody;

use AlibabaCloud\Tea\Model;

class podRestartState extends Model
{
    /**
     * @description The reason for the last restart.
     *
     * @example OOMKilled
     *
     * @var string
     */
    public $lastTerminatedReason;

    /**
     * @description The number of times that the container restarted.
     *
     * @example 1
     *
     * @var int
     */
    public $restartCount;
    protected $_name = [
        'lastTerminatedReason' => 'LastTerminatedReason',
        'restartCount'         => 'RestartCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastTerminatedReason) {
            $res['LastTerminatedReason'] = $this->lastTerminatedReason;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return podRestartState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastTerminatedReason'])) {
            $model->lastTerminatedReason = $map['LastTerminatedReason'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }

        return $model;
    }
}
