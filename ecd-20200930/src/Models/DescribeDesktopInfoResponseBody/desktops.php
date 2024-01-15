<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponseBody;

use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description The connection status of the end user. Valid values:
     *
     *   Connected
     *   Disconnected
     *
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The current version of the cloud desktop.
     *
     * @example 1.4.0-R-***
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @description The cloud desktop ID.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The status of the cloud desktop. Valid values:
     *
     *   Pending
     *   Starting
     *   Running
     *   Stopping
     *   Stopped
     *   Expired
     *   Deleted
     *   Failed
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The flag that is used to manage the cloud desktop.
     *
     * @var string[]
     */
    public $managementFlag;

    /**
     * @var int
     */
    public $newAppSize;

    /**
     * @var string
     */
    public $newAppVersion;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @description The first time when the cloud desktop was started.
     *
     * @example 2020-11-06T08:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'connectionStatus'  => 'ConnectionStatus',
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopId'         => 'DesktopId',
        'desktopStatus'     => 'DesktopStatus',
        'managementFlag'    => 'ManagementFlag',
        'newAppSize'        => 'NewAppSize',
        'newAppVersion'     => 'NewAppVersion',
        'releaseNote'       => 'ReleaseNote',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->currentAppVersion) {
            $res['CurrentAppVersion'] = $this->currentAppVersion;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }
        if (null !== $this->newAppSize) {
            $res['NewAppSize'] = $this->newAppSize;
        }
        if (null !== $this->newAppVersion) {
            $res['NewAppVersion'] = $this->newAppVersion;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['CurrentAppVersion'])) {
            $model->currentAppVersion = $map['CurrentAppVersion'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['ManagementFlag'])) {
            if (!empty($map['ManagementFlag'])) {
                $model->managementFlag = $map['ManagementFlag'];
            }
        }
        if (isset($map['NewAppSize'])) {
            $model->newAppSize = $map['NewAppSize'];
        }
        if (isset($map['NewAppVersion'])) {
            $model->newAppVersion = $map['NewAppVersion'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
