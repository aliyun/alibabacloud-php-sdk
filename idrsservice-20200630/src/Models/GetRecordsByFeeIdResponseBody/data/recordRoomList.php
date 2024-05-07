<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByFeeIdResponseBody\data;

use AlibabaCloud\Tea\Model;

class recordRoomList extends Model
{
    /**
     * @example ads32efef43
     *
     * @var string
     */
    public $outerBusinessId;

    /**
     * @example Mix
     *
     * @var string
     */
    public $recordType;

    /**
     * @example 21343
     *
     * @var string
     */
    public $role;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.meta
     *
     * @var string
     */
    public $roomMetaUrl;

    /**
     * @example 2020-07-14T14:01:41.000+08:00
     *
     * @var string
     */
    public $roomRecordAt;

    /**
     * @example http://oss.aliyuncs.com/1.mp4.json
     *
     * @var string
     */
    public $roomResultUrl;

    /**
     * @example runnable
     *
     * @var string
     */
    public $roomStatus;

    /**
     * @example http://oss.aliyuncs.com/1.mp4
     *
     * @var string
     */
    public $roomVideoUrl;

    /**
     * @example record_65703154805715668342
     *
     * @var string
     */
    public $rtcRecordId;
    protected $_name = [
        'outerBusinessId' => 'OuterBusinessId',
        'recordType'      => 'RecordType',
        'role'            => 'Role',
        'roomMetaUrl'     => 'RoomMetaUrl',
        'roomRecordAt'    => 'RoomRecordAt',
        'roomResultUrl'   => 'RoomResultUrl',
        'roomStatus'      => 'RoomStatus',
        'roomVideoUrl'    => 'RoomVideoUrl',
        'rtcRecordId'     => 'RtcRecordId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerBusinessId) {
            $res['OuterBusinessId'] = $this->outerBusinessId;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->roomMetaUrl) {
            $res['RoomMetaUrl'] = $this->roomMetaUrl;
        }
        if (null !== $this->roomRecordAt) {
            $res['RoomRecordAt'] = $this->roomRecordAt;
        }
        if (null !== $this->roomResultUrl) {
            $res['RoomResultUrl'] = $this->roomResultUrl;
        }
        if (null !== $this->roomStatus) {
            $res['RoomStatus'] = $this->roomStatus;
        }
        if (null !== $this->roomVideoUrl) {
            $res['RoomVideoUrl'] = $this->roomVideoUrl;
        }
        if (null !== $this->rtcRecordId) {
            $res['RtcRecordId'] = $this->rtcRecordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordRoomList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterBusinessId'])) {
            $model->outerBusinessId = $map['OuterBusinessId'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RoomMetaUrl'])) {
            $model->roomMetaUrl = $map['RoomMetaUrl'];
        }
        if (isset($map['RoomRecordAt'])) {
            $model->roomRecordAt = $map['RoomRecordAt'];
        }
        if (isset($map['RoomResultUrl'])) {
            $model->roomResultUrl = $map['RoomResultUrl'];
        }
        if (isset($map['RoomStatus'])) {
            $model->roomStatus = $map['RoomStatus'];
        }
        if (isset($map['RoomVideoUrl'])) {
            $model->roomVideoUrl = $map['RoomVideoUrl'];
        }
        if (isset($map['RtcRecordId'])) {
            $model->rtcRecordId = $map['RtcRecordId'];
        }

        return $model;
    }
}
