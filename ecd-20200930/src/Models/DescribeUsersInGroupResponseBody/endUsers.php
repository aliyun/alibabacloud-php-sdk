<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\externalInfo;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUsersInGroupResponseBody\endUsers\userSetPropertiesModels;
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

    /**
     * @var externalInfo
     */
    public $externalInfo;

    /**
     * @var userSetPropertiesModels[]
     */
    public $userSetPropertiesModels;
    protected $_name = [
        'connectionStatus'        => 'ConnectionStatus',
        'desktopId'               => 'DesktopId',
        'desktopName'             => 'DesktopName',
        'endUserEmail'            => 'EndUserEmail',
        'endUserId'               => 'EndUserId',
        'endUserName'             => 'EndUserName',
        'endUserPhone'            => 'EndUserPhone',
        'endUserType'             => 'EndUserType',
        'externalInfo'            => 'ExternalInfo',
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
        if (null !== $this->externalInfo) {
            $res['ExternalInfo'] = null !== $this->externalInfo ? $this->externalInfo->toMap() : null;
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
        if (isset($map['ExternalInfo'])) {
            $model->externalInfo = externalInfo::fromMap($map['ExternalInfo']);
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
