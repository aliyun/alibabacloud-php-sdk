<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponse;

use AlibabaCloud\Tea\Model;

class endUsers extends Model
{
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
    public $desktopName;

    /**
     * @var string
     */
    public $endUserEmail;

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
    public $endUserPhone;

    /**
     * @var string
     */
    public $endUserType;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'desktopId'        => 'DesktopId',
        'desktopName'      => 'DesktopName',
        'endUserEmail'     => 'EndUserEmail',
        'endUserId'        => 'EndUserId',
        'endUserName'      => 'EndUserName',
        'endUserPhone'     => 'EndUserPhone',
        'endUserType'      => 'EndUserType',
    ];

    public function validate()
    {
        Model::validateRequired('connectionStatus', $this->connectionStatus, true);
        Model::validateRequired('desktopId', $this->desktopId, true);
        Model::validateRequired('desktopName', $this->desktopName, true);
        Model::validateRequired('endUserEmail', $this->endUserEmail, true);
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('endUserName', $this->endUserName, true);
        Model::validateRequired('endUserPhone', $this->endUserPhone, true);
        Model::validateRequired('endUserType', $this->endUserType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->endUserEmail) {
            $res['EndUserEmail'] = $this->endUserEmail;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
        }
        if (null !== $this->endUserPhone) {
            $res['EndUserPhone'] = $this->endUserPhone;
        }
        if (null !== $this->endUserType) {
            $res['EndUserType'] = $this->endUserType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }
        if (isset($map['EndUserEmail'])) {
            $model->endUserEmail = $map['EndUserEmail'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }
        if (isset($map['EndUserPhone'])) {
            $model->endUserPhone = $map['EndUserPhone'];
        }
        if (isset($map['EndUserType'])) {
            $model->endUserType = $map['EndUserType'];
        }

        return $model;
    }
}
