<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class ReportLiveStateRequest extends Model
{
    /**
     * @var string
     */
    public $anchorId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $liveMode;

    /**
     * @var string
     */
    public $liveState;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'anchorId'  => 'AnchorId',
        'id'        => 'Id',
        'liveMode'  => 'LiveMode',
        'liveState' => 'LiveState',
        'startTime' => 'StartTime',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->liveMode) {
            $res['LiveMode'] = $this->liveMode;
        }
        if (null !== $this->liveState) {
            $res['LiveState'] = $this->liveState;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportLiveStateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LiveMode'])) {
            $model->liveMode = $map['LiveMode'];
        }
        if (isset($map['LiveState'])) {
            $model->liveState = $map['LiveState'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
