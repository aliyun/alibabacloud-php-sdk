<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateSessionRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example e01-cn-kvw44e6dn04
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the session corresponding to the session package.
     *
     * @example Valid values: Sol (default): based on serial port Assistant: based on cloud assistant
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description The start time. The value is a 13-digit timestamp.
     *
     * @example 1669340937156
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'nodeId' => 'NodeId',
        'sessionType' => 'SessionType',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
