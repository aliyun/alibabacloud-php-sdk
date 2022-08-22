<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateClassResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $classId;

    /**
     * @var string
     */
    public $confId;

    /**
     * @var string
     */
    public $createNickname;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $whiteboardId;

    /**
     * @var string
     */
    public $whiteboardRecordId;
    protected $_name = [
        'classId'            => 'ClassId',
        'confId'             => 'ConfId',
        'createNickname'     => 'CreateNickname',
        'createUserId'       => 'CreateUserId',
        'liveId'             => 'LiveId',
        'roomId'             => 'RoomId',
        'status'             => 'Status',
        'title'              => 'Title',
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
        if (null !== $this->confId) {
            $res['ConfId'] = $this->confId;
        }
        if (null !== $this->createNickname) {
            $res['CreateNickname'] = $this->createNickname;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ConfId'])) {
            $model->confId = $map['ConfId'];
        }
        if (isset($map['CreateNickname'])) {
            $model->createNickname = $map['CreateNickname'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
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
