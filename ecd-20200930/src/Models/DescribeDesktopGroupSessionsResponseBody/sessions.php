<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupSessionsResponseBody;

use AlibabaCloud\Dara\Model;

class sessions extends Model
{
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
     * @var int
     */
    public $endUserApplyCoordinateTime;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $lastSessionEndTime;
    /**
     * @var string
     */
    public $lastSessionStartTime;
    /**
     * @var int
     */
    public $latestConnectionTime;
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
    public $osType;
    /**
     * @var int
     */
    public $ownType;
    /**
     * @var string
     */
    public $protocolType;
    /**
     * @var int
     */
    public $sessionIdleTime;
    /**
     * @var string
     */
    public $sessionStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
