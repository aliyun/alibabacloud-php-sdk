<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateSessionRequest extends Model
{
    /**
     * @description Instance ID.
     *
     * @example e01-cn-kvw44e6dn04
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Session type corresponding to the session package.
     *
     * @example N	两种：
     * Sol：基于串口[默认]
     * Assistant：基于云助手
     *
     * @var string
     */
    public $sessionType;

    /**
     * @description Initiation time, 13-digit timestamp.
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
