<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The name of the cloud desktop.
     *
     * @example 112259558861****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The name of the cloud desktop.
     *
     * @example 8665
     *
     * @var string
     */
    public $bytesReceived;

    /**
     * @description The information about the regular user that connects to the cloud desktop from the EDS client. The information can be the RAM user ID or Active Directory (AD) username. If you do not specify a value for this parameter, events of all regular users in the specified region are queried.
     *
     * @example 2345
     *
     * @var string
     */
    public $bytesSend;

    /**
     * @description The IP address of the cloud desktop. If you do not specify a value for this parameter, events of all cloud desktops in the specified region are queried.
     *
     * @example 100.68.*.*
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The ID of the cloud desktop.
     *
     * @example Darwin 17.7.0 x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description DescribeClientEvents
     *
     * @example 1.0.4 202012021700
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example dg-kadkdfaf****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @example testName
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The name of the desktop group.
     *
     * @example ecd-8fupvkhg0aayu****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the workspace.
     *
     * @example 10.10.*.*
     *
     * @var string
     */
    public $desktopIp;

    /**
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The type of the event.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The type of event.
     *
     * @example RAM
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The end of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * If you do not specify a value for this parameter, the current time is used.
     * @example 28961708130834****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The type of event that you want to query. Valid values:
     *
     *   DESKTOP_CONNECT: The desktop session is established.
     *   DESKTOP_DISCONNECT: The desktop session is disconnected.
     *   DESKTOP_REBOOT: The cloud desktop is restarted.
     *   CLIENT_AD_LOGIN: The AD user logs on to the client.
     *   GET_CONNECTION_TICKET: The request to connect to the cloud desktop is sent.
     *   DESKTOP_START: The cloud desktop is started.
     *   DESKTOP_STOP: The cloud desktop is stopped.
     *
     * If you do not specify a value for this parameter, events of all types are queried.
     * @example 5651188b-3070-d1cc-5311-75753d59****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The beginning of the time range to query. Specify the time in the [ISO 8601](~~25696~~) standard in the YYYY-MM-DDThh:mm:ssZ format. The time must be in UTC.
     *
     * If you do not specify a value for this parameter, all events that occurred before the point in time that you specify for `EndTime` are queried.
     * @example 2020-11-30T06:32:31Z
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description The query token. Set the value to the NextToken value that is returned from the last call to the DescribeClientEvents operation.
     *
     * @example DESKTOP_DISCONNECT
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the event.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The ID of the request.
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The ID of the cloud desktop. If you do not specify a value for this parameter, events of all cloud desktops in the specified region are queried.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of bytes that are sent.
     *
     * @example 200
     *
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
