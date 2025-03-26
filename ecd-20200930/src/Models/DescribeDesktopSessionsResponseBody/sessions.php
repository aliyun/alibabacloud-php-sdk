<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponseBody;

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
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var int
     */
    public $endUserApplyCoordinateTime;

    /**
     * @var string
     */
    public $endUserId;

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
    public $osSessionStatus;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $sessionEndTime;

    /**
     * @var int
     */
    public $sessionIdleTime;

    /**
     * @var string
     */
    public $sessionStartTime;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var string
     */
    public $subPayType;

    /**
     * @var int
     */
    public $totalConnectionTime;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'clientOS' => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'endUserApplyCoordinateTime' => 'EndUserApplyCoordinateTime',
        'endUserId' => 'EndUserId',
        'latestConnectionTime' => 'LatestConnectionTime',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'osSessionStatus' => 'OsSessionStatus',
        'osType' => 'OsType',
        'protocolType' => 'ProtocolType',
        'sessionEndTime' => 'SessionEndTime',
        'sessionIdleTime' => 'SessionIdleTime',
        'sessionStartTime' => 'SessionStartTime',
        'sessionStatus' => 'SessionStatus',
        'subPayType' => 'SubPayType',
        'totalConnectionTime' => 'TotalConnectionTime',
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
