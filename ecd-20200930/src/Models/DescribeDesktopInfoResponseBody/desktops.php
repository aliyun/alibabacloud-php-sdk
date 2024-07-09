<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponseBody;

use AlibabaCloud\Tea\Model;

class desktops extends Model
{
    /**
     * @description The connection status of the user.
     *
     * Valid values:
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
     * @description The version of the cloud computer image.
     *
     * @example 1.4.0-R-***
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @description The ID of the cloud computer pool.
     *
     * @example dg-3uiojcc0j4kh7****
     *
     * @var string
     */
    public $desktopGroupId;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The status of the cloud computer.
     *
     * Valid values:
     *
     *   Stopped
     *   Failed
     *   Starting
     *   Running
     *   Stopping
     *   Expired
     *   Deleted
     *   Pending
     *
     * @example Running
     *
     * @var string
     */
    public $desktopStatus;

    /**
     * @description The information about flags that are used to manage cloud computers.
     *
     * @var string[]
     */
    public $managementFlag;

    /**
     * @description The size of the update package. Unit: KB.
     *
     * @example 568533470
     *
     * @var int
     */
    public $newAppSize;

    /**
     * @description The version number of the image that can be updated on the cloud computer.
     *
     * @example 1.6.0-R-***
     *
     * @var string
     */
    public $newAppVersion;

    /**
     * @description The description of the image version that can be updated.
     *
     * @example Test package 03-07
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The time when the cloud computer was first started.
     *
     * @example 2020-11-06T08:31Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'connectionStatus'  => 'ConnectionStatus',
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopGroupId'    => 'DesktopGroupId',
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
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
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
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
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
