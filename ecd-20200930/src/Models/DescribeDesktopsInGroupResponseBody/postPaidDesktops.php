<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponseBody;

use AlibabaCloud\Tea\Model;

class postPaidDesktops extends Model
{
    /**
     * @var string
     */
    public $createDuration;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $desktopStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $endUserName;
    protected $_name = [
        'createDuration'   => 'CreateDuration',
        'endUserId'        => 'EndUserId',
        'desktopStatus'    => 'DesktopStatus',
        'createTime'       => 'CreateTime',
        'releaseTime'      => 'ReleaseTime',
        'desktopName'      => 'DesktopName',
        'connectionStatus' => 'ConnectionStatus',
        'desktopId'        => 'DesktopId',
        'endUserName'      => 'EndUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createDuration) {
            $res['CreateDuration'] = $this->createDuration;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postPaidDesktops
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDuration'])) {
            $model->createDuration = $map['CreateDuration'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }

        return $model;
    }
}
