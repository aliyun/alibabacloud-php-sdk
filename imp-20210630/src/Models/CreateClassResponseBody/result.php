<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 课堂唯一标识。
     *
     * @var string
     */
    public $classId;

    /**
     * @description 课堂标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 创建人ID。
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description 创建人昵称。
     *
     * @var string
     */
    public $createNickname;

    /**
     * @description 课堂状态，0:未开始 1:上课中 2:已下课。
     *
     * @var int
     */
    public $status;

    /**
     * @description 房间ID
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 直播的唯一标识ID。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 连麦会议唯一标识。
     *
     * @var string
     */
    public $confId;

    /**
     * @description 白板ID
     *
     * @var string
     */
    public $whiteboardId;

    /**
     * @description 白板录制ID
     *
     * @var string
     */
    public $whiteboardRecordId;
    protected $_name = [
        'classId'            => 'ClassId',
        'title'              => 'Title',
        'createUserId'       => 'CreateUserId',
        'createNickname'     => 'CreateNickname',
        'status'             => 'Status',
        'roomId'             => 'RoomId',
        'liveId'             => 'LiveId',
        'confId'             => 'ConfId',
        'whiteboardId'       => 'WhiteboardId',
        'whiteboardRecordId' => 'WhiteboardRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classId) {
            $res['ClassId'] = $this->classId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createNickname) {
            $res['CreateNickname'] = $this->createNickname;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->confId) {
            $res['ConfId'] = $this->confId;
        }
        if (null !== $this->whiteboardId) {
            $res['WhiteboardId'] = $this->whiteboardId;
        }
        if (null !== $this->whiteboardRecordId) {
            $res['WhiteboardRecordId'] = $this->whiteboardRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassId'])) {
            $model->classId = $map['ClassId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateNickname'])) {
            $model->createNickname = $map['CreateNickname'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['ConfId'])) {
            $model->confId = $map['ConfId'];
        }
        if (isset($map['WhiteboardId'])) {
            $model->whiteboardId = $map['WhiteboardId'];
        }
        if (isset($map['WhiteboardRecordId'])) {
            $model->whiteboardRecordId = $map['WhiteboardRecordId'];
        }

        return $model;
    }
}
