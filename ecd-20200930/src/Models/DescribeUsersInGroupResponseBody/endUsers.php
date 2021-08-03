<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody;

use AlibabaCloud\Tea\Model;

class endUsers extends Model
{
    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $endUserEmail;

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
    public $endUserType;

    /**
     * @var string
     */
    public $endUserPhone;

    /**
     * @var string
     */
    public $endUserName;
    protected $_name = [
        'endUserId'        => 'EndUserId',
        'endUserEmail'     => 'EndUserEmail',
        'desktopName'      => 'DesktopName',
        'connectionStatus' => 'ConnectionStatus',
        'desktopId'        => 'DesktopId',
        'endUserType'      => 'EndUserType',
        'endUserPhone'     => 'EndUserPhone',
        'endUserName'      => 'EndUserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->endUserEmail) {
            $res['EndUserEmail'] = $this->endUserEmail;
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
        if (null !== $this->endUserType) {
            $res['EndUserType'] = $this->endUserType;
        }
        if (null !== $this->endUserPhone) {
            $res['EndUserPhone'] = $this->endUserPhone;
        }
        if (null !== $this->endUserName) {
            $res['EndUserName'] = $this->endUserName;
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
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['EndUserEmail'])) {
            $model->endUserEmail = $map['EndUserEmail'];
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
        if (isset($map['EndUserType'])) {
            $model->endUserType = $map['EndUserType'];
        }
        if (isset($map['EndUserPhone'])) {
            $model->endUserPhone = $map['EndUserPhone'];
        }
        if (isset($map['EndUserName'])) {
            $model->endUserName = $map['EndUserName'];
        }

        return $model;
    }
}
