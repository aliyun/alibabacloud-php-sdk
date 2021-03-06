<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponse;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopIp;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $bytesSend;

    /**
     * @var string
     */
    public $bytesReceived;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eventId'       => 'EventId',
        'eventType'     => 'EventType',
        'eventTime'     => 'EventTime',
        'regionId'      => 'RegionId',
        'aliUid'        => 'AliUid',
        'endUserId'     => 'EndUserId',
        'desktopId'     => 'DesktopId',
        'desktopIp'     => 'DesktopIp',
        'directoryId'   => 'DirectoryId',
        'directoryType' => 'DirectoryType',
        'clientOS'      => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'clientIp'      => 'ClientIp',
        'bytesSend'     => 'BytesSend',
        'bytesReceived' => 'BytesReceived',
        'status'        => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('eventId', $this->eventId, true);
        Model::validateRequired('eventType', $this->eventType, true);
        Model::validateRequired('eventTime', $this->eventTime, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('aliUid', $this->aliUid, true);
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopIp', $this->desktopIp, true);
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('directoryType', $this->directoryType, true);
        Model::validateRequired('clientOS', $this->clientOS, true);
        Model::validateRequired('clientVersion', $this->clientVersion, true);
        Model::validateRequired('clientIp', $this->clientIp, true);
        Model::validateRequired('bytesSend', $this->bytesSend, true);
        Model::validateRequired('bytesReceived', $this->bytesReceived, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopIp) {
            $res['DesktopIp'] = $this->desktopIp;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->bytesSend) {
            $res['BytesSend'] = $this->bytesSend;
        }
        if (null !== $this->bytesReceived) {
            $res['BytesReceived'] = $this->bytesReceived;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopIp'])) {
            $model->desktopIp = $map['DesktopIp'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['BytesSend'])) {
            $model->bytesSend = $map['BytesSend'];
        }
        if (isset($map['BytesReceived'])) {
            $model->bytesReceived = $map['BytesReceived'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
