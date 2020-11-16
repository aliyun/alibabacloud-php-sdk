<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRoomResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $anchorId;
    protected $_name = [
        'requestId' => 'RequestId',
        'appId'     => 'AppId',
        'roomId'    => 'RoomId',
        'anchorId'  => 'AnchorId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('roomId', $this->roomId, true);
        Model::validateRequired('anchorId', $this->anchorId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoomResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }

        return $model;
    }
}
