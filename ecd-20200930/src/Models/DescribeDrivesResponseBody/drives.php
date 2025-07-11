<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDrivesResponseBody;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDrivesResponseBody\drives\desktopGroups;
use AlibabaCloud\Tea\Model;

class drives extends Model
{
    /**
     * @example 1202****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example test****
     *
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var desktopGroups[]
     */
    public $desktopGroups;

    /**
     * @example dom-aaaa****
     *
     * @var string
     */
    public $domainId;

    /**
     * @example dri-aaaa****
     *
     * @var string
     */
    public $driveId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableProfileManagement;

    /**
     * @example 0976****
     *
     * @var string
     */
    public $externalDomainId;

    /**
     * @example 1100****
     *
     * @var string
     */
    public $externalDriveId;

    /**
     * @example user01@cn-hangzhou.120****
     *
     * @var string
     */
    public $externalUserId;

    /**
     * @example 2025-07-02T08:42:26.000+00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2025-07-07T02:46:04.000+00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example test****
     *
     * @var string
     */
    public $name;

    /**
     * @example -
     *
     * @var bool
     */
    public $profileRoaming;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @example 536870912000
     *
     * @var int
     */
    public $totalSize;

    /**
     * @example USER_PROFILE
     *
     * @var string
     */
    public $type;

    /**
     * @example 243175936
     *
     * @var int
     */
    public $usedSize;

    /**
     * @example user01
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'aliUid' => 'AliUid',
        'description' => 'Description',
        'desktopGroupCount' => 'DesktopGroupCount',
        'desktopGroups' => 'DesktopGroups',
        'domainId' => 'DomainId',
        'driveId' => 'DriveId',
        'enableProfileManagement' => 'EnableProfileManagement',
        'externalDomainId' => 'ExternalDomainId',
        'externalDriveId' => 'ExternalDriveId',
        'externalUserId' => 'ExternalUserId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'name' => 'Name',
        'profileRoaming' => 'ProfileRoaming',
        'status' => 'Status',
        'totalSize' => 'TotalSize',
        'type' => 'Type',
        'usedSize' => 'UsedSize',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }
        if (null !== $this->desktopGroups) {
            $res['DesktopGroups'] = [];
            if (null !== $this->desktopGroups && \is_array($this->desktopGroups)) {
                $n = 0;
                foreach ($this->desktopGroups as $item) {
                    $res['DesktopGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainId) {
            $res['DomainId'] = $this->domainId;
        }
        if (null !== $this->driveId) {
            $res['DriveId'] = $this->driveId;
        }
        if (null !== $this->enableProfileManagement) {
            $res['EnableProfileManagement'] = $this->enableProfileManagement;
        }
        if (null !== $this->externalDomainId) {
            $res['ExternalDomainId'] = $this->externalDomainId;
        }
        if (null !== $this->externalDriveId) {
            $res['ExternalDriveId'] = $this->externalDriveId;
        }
        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profileRoaming) {
            $res['ProfileRoaming'] = $this->profileRoaming;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->usedSize) {
            $res['UsedSize'] = $this->usedSize;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drives
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }
        if (isset($map['DesktopGroups'])) {
            if (!empty($map['DesktopGroups'])) {
                $model->desktopGroups = [];
                $n = 0;
                foreach ($map['DesktopGroups'] as $item) {
                    $model->desktopGroups[$n++] = null !== $item ? desktopGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainId'])) {
            $model->domainId = $map['DomainId'];
        }
        if (isset($map['DriveId'])) {
            $model->driveId = $map['DriveId'];
        }
        if (isset($map['EnableProfileManagement'])) {
            $model->enableProfileManagement = $map['EnableProfileManagement'];
        }
        if (isset($map['ExternalDomainId'])) {
            $model->externalDomainId = $map['ExternalDomainId'];
        }
        if (isset($map['ExternalDriveId'])) {
            $model->externalDriveId = $map['ExternalDriveId'];
        }
        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProfileRoaming'])) {
            $model->profileRoaming = $map['ProfileRoaming'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UsedSize'])) {
            $model->usedSize = $map['UsedSize'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
