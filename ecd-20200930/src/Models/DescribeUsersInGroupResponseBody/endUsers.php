<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\externalInfo;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels;
use AlibabaCloud\Tea\Model;

class endUsers extends Model
{
    /**
     * @description The connection status.
     *
     * Valid values:
     *
     *   0: disconnected
     *   1: connecting
     *
     * @example 1
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The ID of the cloud computer.
     *
     * @example ecd-gx2x1dhsmucyy****
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The name of the cloud computer.
     *
     * @example testName
     *
     * @var string
     */
    public $desktopName;

    /**
     * @description The display name of the enterprise AD account.
     *
     * @example alice
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The email address of the authorized user.
     *
     * @example alice@example.com
     *
     * @var string
     */
    public $endUserEmail;

    /**
     * @description The ID of the authorized user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The username of the authorized user.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserName;

    /**
     * @description The mobile number of the authorized user.
     *
     * @example 1381111****
     *
     * @var string
     */
    public $endUserPhone;

    /**
     * @description The remarks.
     *
     * @example Note
     *
     * @var string
     */
    public $endUserRemark;

    /**
     * @description The user account type.
     *
     * Valid values:
     *
     *   SIMPLE: convenience account
     *   AD_CONNECTOR: enterprise Active Directory (AD) account
     *
     * @example SIMPLE
     *
     * @var string
     */
    public $endUserType;

    /**
     * @description The appended information.
     *
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @description The ID of the cloud computer that is used by the user.
     *
     * @example ud-i896ze8hazpvl****
     *
     * @var string
     */
    public $userDesktopId;

    /**
     * @description Details about the seats of users.
     *
     * @var userSetPropertiesModels[]
     */
    public $userSetPropertiesModels;
    protected $_name = [
        'connectionStatus'        => 'ConnectionStatus',
        'desktopId'               => 'DesktopId',
        'desktopName'             => 'DesktopName',
        'displayName'             => 'DisplayName',
        'endUserEmail'            => 'EndUserEmail',
        'endUserId'               => 'EndUserId',
        'endUserName'             => 'EndUserName',
        'endUserPhone'            => 'EndUserPhone',
        'endUserRemark'           => 'EndUserRemark',
        'endUserType'             => 'EndUserType',
        'externalInfo'            => 'ExternalInfo',
        'userDesktopId'           => 'UserDesktopId',
        'userSetPropertiesModels' => 'UserSetPropertiesModels',
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
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
        if (null !== $this->endUserRemark) {
            $res['EndUserRemark'] = $this->endUserRemark;
        }
        if (null !== $this->endUserType) {
            $res['EndUserType'] = $this->endUserType;
        }
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toMap() : null;
        }
        if (null !== $this->userDesktopId) {
            $res['UserDesktopId'] = $this->userDesktopId;
        }
        if (null !== $this->userSetPropertiesModels) {
            $res['UserSetPropertiesModels'] = [];
            if (null !== $this->userSetPropertiesModels && \is_array($this->userSetPropertiesModels)) {
                $n = 0;
                foreach ($this->userSetPropertiesModels as $item) {
                    $res['UserSetPropertiesModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
        if (isset($map['EndUserRemark'])) {
            $model->endUserRemark = $map['EndUserRemark'];
        }
        if (isset($map['EndUserType'])) {
            $model->endUserType = $map['EndUserType'];
        }
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = externalInfo::fromMap($map['ExternalInfo']);
        }
        if (isset($map['UserDesktopId'])) {
            $model->userDesktopId = $map['UserDesktopId'];
        }
        if (isset($map['UserSetPropertiesModels'])) {
            if (!empty($map['UserSetPropertiesModels'])) {
                $model->userSetPropertiesModels = [];
                $n                              = 0;
                foreach ($map['UserSetPropertiesModels'] as $item) {
                    $model->userSetPropertiesModels[$n++] = null !== $item ? userSetPropertiesModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
