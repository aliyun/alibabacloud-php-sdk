<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\externalInfo;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels;

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
    public $displayName;

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
    public $endUserRemark;

    /**
     * @var string
     */
    public $endUserType;

    /**
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @var string
     */
    public $userDesktopId;

    /**
     * @var userSetPropertiesModels[]
     */
    public $userSetPropertiesModels;
    protected $_name = [
        'connectionStatus' => 'ConnectionStatus',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'displayName' => 'DisplayName',
        'endUserEmail' => 'EndUserEmail',
        'endUserId' => 'EndUserId',
        'endUserName' => 'EndUserName',
        'endUserPhone' => 'EndUserPhone',
        'endUserRemark' => 'EndUserRemark',
        'endUserType' => 'EndUserType',
        'externalInfo' => 'ExternalInfo',
        'userDesktopId' => 'UserDesktopId',
        'userSetPropertiesModels' => 'UserSetPropertiesModels',
    ];

    public function validate()
    {
        if (null !== $this->externalInfo) {
            $this->externalInfo->validate();
        }
        if (\is_array($this->userSetPropertiesModels)) {
            Model::validateArray($this->userSetPropertiesModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toArray($noStream) : $this->externalInfo;
        }

        if (null !== $this->userDesktopId) {
            $res['UserDesktopId'] = $this->userDesktopId;
        }

        if (null !== $this->userSetPropertiesModels) {
            if (\is_array($this->userSetPropertiesModels)) {
                $res['UserSetPropertiesModels'] = [];
                $n1 = 0;
                foreach ($this->userSetPropertiesModels as $item1) {
                    $res['UserSetPropertiesModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1 = 0;
                foreach ($map['UserSetPropertiesModels'] as $item1) {
                    $model->userSetPropertiesModels[$n1++] = userSetPropertiesModels::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
