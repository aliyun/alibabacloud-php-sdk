<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupSessionsResponseBody;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 172.21.XX.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The OS that the client runs.
     *
     * @example windows_\"Windows10Enterprise\"10.0(Build22000)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The version of the client.
     *
     * @example 2.0.0-R-20221030.08****
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the desktop group.
     *
     * @example dg-iaqu3bi2xtie****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The name of the desktop group.
     *
     * @example Test
     *
     * @var string
     */
    public $desktopGroupName;

    /**
     * @description If the session is being established, the value of this parameter indicates the ID of the current cloud desktop. If the session is disconnected, the value of this parameter indicates the ID of the cloud desktop that was most recently connected.
     *
     * @example ecd-g6t1ukbaea****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The point in time when the end user applies for administrator assistance.
     *
     * @example 1678794261000
     *
     * @var int
     */
    public $endUserApplyCoordinateTime;

    /**
     * @description The ID of the end user.
     *
     * @example xianqiu
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The end time of the most recent connection.
     *
     * @example 2022-08-31 06:56:45
     *
     * @var string
     */
    public $lastSessionEndTime;

    /**
     * @description The start time of the most recent connection.
     *
     * @example 2022-08-31 06:56:45
     *
     * @var string
     */
    public $lastSessionStartTime;

    /**
     * @description The duration of the most recent session.
     *
     * @example 120
     *
     * @var int
     */
    public $latestConnectionTime;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-8904****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the workspace.
     *
     * @example Test
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @description The OS. Valid values:
     *
     *   Windows
     *   Linux
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The type of the session.
     *
     * Valid values:
     *
     *   0: single-session
     *   1: multi-session
     *
     * @example 0
     *
     * @var int
     */
    public $ownType;

    /**
     * @description The type of the protocol.
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The duration during which the cloud desktop stays in the Idle state.
     *
     * @example 120
     *
     * @var int
     */
    public $sessionIdleTime;

    /**
     * @description The state of the session.
     *
     * Valid values:
     *
     *   Connected
     *
     * <!-- -->
     *
     *   Disconnected
     *
     * <!-- -->
     * @example Connected
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @description The total duration of the sessions.
     *
     * @example 120
     *
     * @var int
     */
    public $totalConnectionDuration;
    protected $_name = [
        'clientIp'                   => 'ClientIp',
        'clientOS'                   => 'ClientOS',
        'clientVersion'              => 'ClientVersion',
        'desktopGroupId'             => 'DesktopGroupId',
        'desktopGroupName'           => 'DesktopGroupName',
        'desktopId'                  => 'DesktopId',
        'endUserApplyCoordinateTime' => 'EndUserApplyCoordinateTime',
        'endUserId'                  => 'EndUserId',
        'lastSessionEndTime'         => 'LastSessionEndTime',
        'lastSessionStartTime'       => 'LastSessionStartTime',
        'latestConnectionTime'       => 'LatestConnectionTime',
        'officeSiteId'               => 'OfficeSiteId',
        'officeSiteName'             => 'OfficeSiteName',
        'osType'                     => 'OsType',
        'ownType'                    => 'OwnType',
        'protocolType'               => 'ProtocolType',
        'sessionIdleTime'            => 'SessionIdleTime',
        'sessionStatus'              => 'SessionStatus',
        'totalConnectionDuration'    => 'TotalConnectionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->endUserApplyCoordinateTime) {
            $res['EndUserApplyCoordinateTime'] = $this->endUserApplyCoordinateTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->lastSessionEndTime) {
            $res['LastSessionEndTime'] = $this->lastSessionEndTime;
        }
        if (null !== $this->lastSessionStartTime) {
            $res['LastSessionStartTime'] = $this->lastSessionStartTime;
        }
        if (null !== $this->latestConnectionTime) {
            $res['LatestConnectionTime'] = $this->latestConnectionTime;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->sessionIdleTime) {
            $res['SessionIdleTime'] = $this->sessionIdleTime;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->totalConnectionDuration) {
            $res['TotalConnectionDuration'] = $this->totalConnectionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['EndUserApplyCoordinateTime'])) {
            $model->endUserApplyCoordinateTime = $map['EndUserApplyCoordinateTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LastSessionEndTime'])) {
            $model->lastSessionEndTime = $map['LastSessionEndTime'];
        }
        if (isset($map['LastSessionStartTime'])) {
            $model->lastSessionStartTime = $map['LastSessionStartTime'];
        }
        if (isset($map['LatestConnectionTime'])) {
            $model->latestConnectionTime = $map['LatestConnectionTime'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['SessionIdleTime'])) {
            $model->sessionIdleTime = $map['SessionIdleTime'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['TotalConnectionDuration'])) {
            $model->totalConnectionDuration = $map['TotalConnectionDuration'];
        }

        return $model;
    }
}
