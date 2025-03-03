<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateSessionRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $sessionType;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'nodeId'      => 'NodeId',
        'sessionType' => 'SessionType',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
