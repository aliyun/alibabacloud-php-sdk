<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryAuthUserConnectDurationListResponseBody;

use AlibabaCloud\Dara\Model;

class authUserConnectDurationList extends Model
{
    /**
     * @var int
     */
    public $connectDuration;

    /**
     * @var string
     */
    public $connectEndTime;

    /**
     * @var string
     */
    public $connectStartTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $desktopName;

    /**
     * @var int
     */
    public $directoryType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $displayNameNew;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'connectDuration' => 'ConnectDuration',
        'connectEndTime' => 'ConnectEndTime',
        'connectStartTime' => 'ConnectStartTime',
        'description' => 'Description',
        'desktopId' => 'DesktopId',
        'desktopName' => 'DesktopName',
        'directoryType' => 'DirectoryType',
        'displayName' => 'DisplayName',
        'displayNameNew' => 'DisplayNameNew',
        'domainName' => 'DomainName',
        'endUserId' => 'EndUserId',
        'nickName' => 'NickName',
        'regionId' => 'RegionId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectDuration) {
            $res['ConnectDuration'] = $this->connectDuration;
        }

        if (null !== $this->connectEndTime) {
            $res['ConnectEndTime'] = $this->connectEndTime;
        }

        if (null !== $this->connectStartTime) {
            $res['ConnectStartTime'] = $this->connectStartTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->desktopName) {
            $res['DesktopName'] = $this->desktopName;
        }

        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->displayNameNew) {
            $res['DisplayNameNew'] = $this->displayNameNew;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['ConnectDuration'])) {
            $model->connectDuration = $map['ConnectDuration'];
        }

        if (isset($map['ConnectEndTime'])) {
            $model->connectEndTime = $map['ConnectEndTime'];
        }

        if (isset($map['ConnectStartTime'])) {
            $model->connectStartTime = $map['ConnectStartTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['DesktopName'])) {
            $model->desktopName = $map['DesktopName'];
        }

        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['DisplayNameNew'])) {
            $model->displayNameNew = $map['DisplayNameNew'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
