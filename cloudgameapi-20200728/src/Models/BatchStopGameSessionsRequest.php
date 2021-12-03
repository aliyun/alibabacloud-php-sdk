<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class BatchStopGameSessionsRequest extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $trackInfo;
    protected $_name = [
        'gameId'    => 'GameId',
        'projectId' => 'ProjectId',
        'reason'    => 'Reason',
        'tags'      => 'Tags',
        'token'     => 'Token',
        'trackInfo' => 'TrackInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->trackInfo) {
            $res['TrackInfo'] = $this->trackInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchStopGameSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['TrackInfo'])) {
            $model->trackInfo = $map['TrackInfo'];
        }

        return $model;
    }
}
