<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponseBody;

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
     * @description The client OS.
     *
     * @example windows_\\"Windows10Enterprise\\"10.0(Build22000)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The client version.
     *
     * @example 2.0.0-R-20221030.08****
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-g6t1ukbaea****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer.
     *
     * @example testDesktop
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The duration of the remote assistance. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $endUserApplyCoordinateTime;

    /**
     * @description The ID of the end user.
     *
     * @example testUser
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The duration of the last connection to the cloud computer. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $latestConnectionTime;

    /**
     * @description The ID of the office network.
     *
     * @example cn-hangzhou+dir-8904****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The name of the office network.
     *
     * @example DemoOfficeSite
     *
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $osSessionStatus;

    /**
     * @description The OS.
     *
     * Valid values:
     *
     *   Linux
     *   Windows
     *
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @description The protocol type.
     *
     * Valid values:
     *
     *   HDX
     *   ASP
     *
     * @example ASP
     *
     * @var string
     */
    public $protocolType;

    /**
     * @description The end time of the session.
     *
     * @example 2023-01-28T02:31:43Z
     *
     * @var string
     */
    public $sessionEndTime;

    /**
     * @description The idle duration of the session. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $sessionIdleTime;

    /**
     * @description The start time of the session.
     *
     * @example 2023-01-28T02:31:43Z
     *
     * @var string
     */
    public $sessionStartTime;

    /**
     * @description The state of the session.
     *
     * Valid values:
     *
     *   Connected
     *   Disconnected
     *
     * @example Connected
     *
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @description The total connection duration. Unit: seconds.
     *
     * @example 240
     *
     * @var int
     */
    public $totalConnectionTime;
    protected $_name = [
        'clientIp'                   => 'ClientIp',
        'clientOS'                   => 'ClientOS',
        'clientVersion'              => 'ClientVersion',
        'desktopId'                  => 'DesktopId',
        'desktopName'                => 'DesktopName',
        'endUserApplyCoordinateTime' => 'EndUserApplyCoordinateTime',
        'endUserId'                  => 'EndUserId',
        'latestConnectionTime'       => 'LatestConnectionTime',
        'officeSiteId'               => 'OfficeSiteId',
        'officeSiteName'             => 'OfficeSiteName',
        'osSessionStatus'            => 'OsSessionStatus',
        'osType'                     => 'OsType',
        'protocolType'               => 'ProtocolType',
        'sessionEndTime'             => 'SessionEndTime',
        'sessionIdleTime'            => 'SessionIdleTime',
        'sessionStartTime'           => 'SessionStartTime',
        'sessionStatus'              => 'SessionStatus',
        'subPayType'                 => 'SubPayType',
        'totalConnectionTime'        => 'TotalConnectionTime',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->endUserApplyCoordinateTime) {
            $res['EndUserApplyCoordinateTime'] = $this->endUserApplyCoordinateTime;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
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
        if (null !== $this->osSessionStatus) {
            $res['OsSessionStatus'] = $this->osSessionStatus;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->sessionEndTime) {
            $res['SessionEndTime'] = $this->sessionEndTime;
        }
        if (null !== $this->sessionIdleTime) {
            $res['SessionIdleTime'] = $this->sessionIdleTime;
        }
        if (null !== $this->sessionStartTime) {
            $res['SessionStartTime'] = $this->sessionStartTime;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }
        if (null !== $this->subPayType) {
            $res['SubPayType'] = $this->subPayType;
        }
        if (null !== $this->totalConnectionTime) {
            $res['TotalConnectionTime'] = $this->totalConnectionTime;
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
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EndUserApplyCoordinateTime'])) {
            $model->endUserApplyCoordinateTime = $map['EndUserApplyCoordinateTime'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
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
        if (isset($map['OsSessionStatus'])) {
            $model->osSessionStatus = $map['OsSessionStatus'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['SessionEndTime'])) {
            $model->sessionEndTime = $map['SessionEndTime'];
        }
        if (isset($map['SessionIdleTime'])) {
            $model->sessionIdleTime = $map['SessionIdleTime'];
        }
        if (isset($map['SessionStartTime'])) {
            $model->sessionStartTime = $map['SessionStartTime'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }
        if (isset($map['SubPayType'])) {
            $model->subPayType = $map['SubPayType'];
        }
        if (isset($map['TotalConnectionTime'])) {
            $model->totalConnectionTime = $map['TotalConnectionTime'];
        }

        return $model;
    }
}
