<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopInfoResponseBody;

use AlibabaCloud\Dara\Model;

class desktops extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $currentAppVersion;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
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
     * @var string
     */
    public $startTime;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'currentAppVersion' => 'CurrentAppVersion',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopId' => 'DesktopId',
        'desktopStatus' => 'DesktopStatus',
        'managementFlag' => 'ManagementFlag',
        'newAppSize' => 'NewAppSize',
        'newAppVersion' => 'NewAppVersion',
        'releaseNote' => 'ReleaseNote',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->managementFlag)) {
            Model::validateArray($this->managementFlag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->managementFlag)) {
                $res['ManagementFlag'] = [];
                $n1 = 0;
                foreach ($this->managementFlag as $item1) {
                    $res['ManagementFlag'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->managementFlag = [];
                $n1 = 0;
                foreach ($map['ManagementFlag'] as $item1) {
                    $model->managementFlag[$n1] = $item1;
                    ++$n1;
                }
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
