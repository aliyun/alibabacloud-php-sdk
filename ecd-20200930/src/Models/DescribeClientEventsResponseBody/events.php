<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account with which the event is associated.
     *
     * @example 112259558861****
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description The number of bytes that are received.
     *
     * @example 8665
     *
     * @var string
     */
    public $bytesReceived;

    /**
     * @description The number of bytes that are sent.
     *
     * @example 2345
     *
     * @var string
     */
    public $bytesSend;

    /**
     * @description The IP address of the client.
     *
     * @example 100.68.*.*
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The OS that the client runs.
     *
     * @example Darwin 17.7.0 x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The client version.
     *
     * @example 1.0.4 202012021700
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The desktop group ID.
     *
     * @example dg-kadkdfaf****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The desktop group name.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description The cloud desktop ID.
     *
     * @example ecd-8fupvkhg0aayu****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The IP address of the cloud desktop.
     *
     * @example 10.10.*.*
     *
     * @var string
     */
    public $desktopIp;

    /**
     * @description The cloud desktop name.
     *
     * @example test
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The ID of the directory to which the cloud desktop belongs.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The directory type.
     *
     * @example RAM
     *
     * @var string
     */
    public $directoryType;

    /**
     * @description The information about the end user that connects to the cloud desktop from the EDS client. The information can be a RAM user ID or an AD username.
     *
     * @example 28961708130834****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The event ID.
     *
     * @example 5651188b-3070-d1cc-5311-75753d59****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The time when the event occurred.
     *
     * @example 2020-11-30T06:32:31Z
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description The event type. Valid values:
     *
     * @example DESKTOP_DISCONNECT
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The ID of the workspace to which the cloud desktop belongs.
     *
     * @example cn-hangzhou+dir-bh77qa8nmjot4****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The workspace name.
     *
     * @example test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The account type of the workspace.
     *
     * Valid values:
     *
     *   SIMPLE: convenience account
     *
     * <!-- -->
     *
     *   AD_CONNECTOR: enterprise AD account
     *
     * <!-- -->
     * @example SIMPLE
     *
     * @var string
     */
    public $officeSiteType;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the event. If you set the EventType parameter to `DESKTOP_DISCONNECT` or `GET_CONNECTION_TICKET`, this parameter is returned. Valid values:
     *
     *   200\\. The value indicates that the request is successful.
     *   An error message. The value indicates that the request failed. Example: FailedToGetConnectionTicket.
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
