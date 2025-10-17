<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponseBody\sessions\resourceGroups;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopSessionsResponseBody\sessions\terminalInfo;

class sessions extends Model
{
    /**
     * @var string
     */
    public $accountType;

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
     * @var string
     */
    public $directoryType;

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
     * @var resourceGroups[]
     */
    public $resourceGroups;

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
     * @var terminalInfo
     */
    public $terminalInfo;

    /**
     * @var int
     */
    public $totalConnectionTime;
    protected $_name = [
        'accountType' => 'AccountType',
        'clientIp' => 'ClientIp',
        'clientOS' => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'directoryType' => 'DirectoryType',
        'endUserApplyCoordinateTime' => 'EndUserApplyCoordinateTime',
        'endUserId' => 'EndUserId',
        'latestConnectionTime' => 'LatestConnectionTime',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'osSessionStatus' => 'OsSessionStatus',
        'osType' => 'OsType',
        'protocolType' => 'ProtocolType',
        'resourceGroups' => 'ResourceGroups',
        'sessionEndTime' => 'SessionEndTime',
        'sessionIdleTime' => 'SessionIdleTime',
        'sessionStartTime' => 'SessionStartTime',
        'sessionStatus' => 'SessionStatus',
        'subPayType' => 'SubPayType',
        'terminalInfo' => 'TerminalInfo',
        'totalConnectionTime' => 'TotalConnectionTime',
    ];

    public function validate()
    {
        if (\is_array($this->resourceGroups)) {
            Model::validateArray($this->resourceGroups);
        }
        if (null !== $this->terminalInfo) {
            $this->terminalInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
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

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
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

        if (null !== $this->resourceGroups) {
            if (\is_array($this->resourceGroups)) {
                $res['ResourceGroups'] = [];
                $n1 = 0;
                foreach ($this->resourceGroups as $item1) {
                    $res['ResourceGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->terminalInfo) {
            $res['TerminalInfo'] = null !== $this->terminalInfo ? $this->terminalInfo->toArray($noStream) : $this->terminalInfo;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
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

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
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

        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n1 = 0;
                foreach ($map['ResourceGroups'] as $item1) {
                    $model->resourceGroups[$n1] = resourceGroups::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['TerminalInfo'])) {
            $model->terminalInfo = terminalInfo::fromMap($map['TerminalInfo']);
        }

        if (isset($map['TotalConnectionTime'])) {
            $model->totalConnectionTime = $map['TotalConnectionTime'];
        }

        return $model;
    }
}
