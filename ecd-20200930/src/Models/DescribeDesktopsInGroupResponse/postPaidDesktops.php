<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopsInGroupResponse;

use AlibabaCloud\Tea\Model;

class postPaidDesktops extends Model
{
    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $createDuration;

    /**
     * @var string
     */
    public $createTime;

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
    public $desktopStatus;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $endUserName;

    /**
     * @var string
     */
    public $managementFlag;

    /**
     * @var string
     */
    public $releaseTime;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'createDuration'   => 'CreateDuration',
        'createTime'       => 'CreateTime',
        'desktopId'        => 'DesktopId',
        'desktopName'      => 'DesktopName',
        'desktopStatus'    => 'DesktopStatus',
        'endUserId'        => 'EndUserId',
        'endUserName'      => 'EndUserName',
        'managementFlag'   => 'ManagementFlag',
        'releaseTime'      => 'ReleaseTime',
    ];

    public function validate()
    {
        Model::validateRequired('connectionStatus', $this->connectionStatus, true);
        Model::validateRequired('createDuration', $this->createDuration, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
        Model::validateRequired('desktopStatus', $this->desktopStatus, true);
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('endUserName', $this->endUserName, true);
        Model::validateRequired('managementFlag', $this->managementFlag, true);
        Model::validateRequired('releaseTime', $this->releaseTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->createDuration) {
            $res['CreateDuration'] = $this->createDuration;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->desktopStatus) {
            $res['DesktopStatus'] = $this->desktopStatus;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }
        if (null !== $this->managementFlag) {
            $res['ManagementFlag'] = $this->managementFlag;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
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
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['CreateDuration'])) {
            $model->createDuration = $map['CreateDuration'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['DesktopStatus'])) {
            $model->desktopStatus = $map['DesktopStatus'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }
        if (isset($map['ManagementFlag'])) {
            $model->managementFlag = $map['ManagementFlag'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }

        return $model;
    }
}
