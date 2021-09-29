<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindOsVersionsResponseBody\osVersionList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var string
     */
    public $deviceModelId;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $isMilestone;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $systemVersion;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var string
     */
    public $isForceReboot;

    /**
     * @var string
     */
    public $deviceModelName;

    /**
     * @var string
     */
    public $isSilentUpgrade;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;

    /**
     * @var string
     */
    public $isForceNightUpgrade;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $isForceUpgrade;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'              => 'Status',
        'gmtCreateTimestamp'  => 'GmtCreateTimestamp',
        'deviceModelId'       => 'DeviceModelId',
        'gmtModify'           => 'GmtModify',
        'isMilestone'         => 'IsMilestone',
        'remark'              => 'Remark',
        'systemVersion'       => 'SystemVersion',
        'statusName'          => 'StatusName',
        'isForceReboot'       => 'IsForceReboot',
        'deviceModelName'     => 'DeviceModelName',
        'isSilentUpgrade'     => 'IsSilentUpgrade',
        'gmtModifyTimestamp'  => 'GmtModifyTimestamp',
        'isForceNightUpgrade' => 'IsForceNightUpgrade',
        'gmtCreate'           => 'GmtCreate',
        'isForceUpgrade'      => 'IsForceUpgrade',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->isMilestone) {
            $res['IsMilestone'] = $this->isMilestone;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->isForceReboot) {
            $res['IsForceReboot'] = $this->isForceReboot;
        }
        if (null !== $this->deviceModelName) {
            $res['DeviceModelName'] = $this->deviceModelName;
        }
        if (null !== $this->isSilentUpgrade) {
            $res['IsSilentUpgrade'] = $this->isSilentUpgrade;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }
        if (null !== $this->isForceNightUpgrade) {
            $res['IsForceNightUpgrade'] = $this->isForceNightUpgrade;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->isForceUpgrade) {
            $res['IsForceUpgrade'] = $this->isForceUpgrade;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['IsMilestone'])) {
            $model->isMilestone = $map['IsMilestone'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['IsForceReboot'])) {
            $model->isForceReboot = $map['IsForceReboot'];
        }
        if (isset($map['DeviceModelName'])) {
            $model->deviceModelName = $map['DeviceModelName'];
        }
        if (isset($map['IsSilentUpgrade'])) {
            $model->isSilentUpgrade = $map['IsSilentUpgrade'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }
        if (isset($map['IsForceNightUpgrade'])) {
            $model->isForceNightUpgrade = $map['IsForceNightUpgrade'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['IsForceUpgrade'])) {
            $model->isForceUpgrade = $map['IsForceUpgrade'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
