<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bytesReceived;

    /**
     * @var string
     */
    public $bytesSend;

    /**
     * @var string
     */
    public $clientIp;

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
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

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
    public $desktopName;

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
    public $endUserId;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid'           => 'AliUid',
        'bytesReceived'    => 'BytesReceived',
        'bytesSend'        => 'BytesSend',
        'clientIp'         => 'ClientIp',
        'clientOS'         => 'ClientOS',
        'clientVersion'    => 'ClientVersion',
        'desktopGroupId'   => 'DesktopGroupId',
        'desktopGroupName' => 'DesktopGroupName',
        'desktopId'        => 'DesktopId',
        'desktopIp'        => 'DesktopIp',
        'desktopName'      => 'DesktopName',
        'directoryId'      => 'DirectoryId',
        'directoryType'    => 'DirectoryType',
        'endUserId'        => 'EndUserId',
        'eventId'          => 'EventId',
        'eventTime'        => 'EventTime',
        'eventType'        => 'EventType',
        'officeSiteId'     => 'OfficeSiteId',
        'officeSiteName'   => 'OfficeSiteName',
        'officeSiteType'   => 'OfficeSiteType',
        'regionId'         => 'RegionId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bytesReceived) {
            $res['BytesReceived'] = $this->bytesReceived;
        }
        if (null !== $this->bytesSend) {
            $res['BytesSend'] = $this->bytesSend;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopIp) {
            $res['DesktopIp'] = $this->desktopIp;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BytesReceived'])) {
            $model->bytesReceived = $map['BytesReceived'];
        }
        if (isset($map['BytesSend'])) {
            $model->bytesSend = $map['BytesSend'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopIp'])) {
            $model->desktopIp = $map['DesktopIp'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
