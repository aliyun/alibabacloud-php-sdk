<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByVersionIdResponseBody;

use AlibabaCloud\Tea\Model;

class prepublishList extends Model
{
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
    public $isActive;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var string
     */
    public $barrierCount;

    /**
     * @var string
     */
    public $deviceModelName;

    /**
     * @var string
     */
    public $isTotalPrepublish;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $passedCount;
    protected $_name = [
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'deviceModelId'      => 'DeviceModelId',
        'gmtModify'          => 'GmtModify',
        'isActive'           => 'IsActive',
        'versionId'          => 'VersionId',
        'barrierCount'       => 'BarrierCount',
        'deviceModelName'    => 'DeviceModelName',
        'isTotalPrepublish'  => 'IsTotalPrepublish',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
        'parentId'           => 'ParentId',
        'gmtCreate'          => 'GmtCreate',
        'name'               => 'Name',
        'id'                 => 'Id',
        'versionType'        => 'VersionType',
        'passedCount'        => 'PassedCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->barrierCount) {
            $res['BarrierCount'] = $this->barrierCount;
        }
        if (null !== $this->deviceModelName) {
            $res['DeviceModelName'] = $this->deviceModelName;
        }
        if (null !== $this->isTotalPrepublish) {
            $res['IsTotalPrepublish'] = $this->isTotalPrepublish;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->passedCount) {
            $res['PassedCount'] = $this->passedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return prepublishList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['BarrierCount'])) {
            $model->barrierCount = $map['BarrierCount'];
        }
        if (isset($map['DeviceModelName'])) {
            $model->deviceModelName = $map['DeviceModelName'];
        }
        if (isset($map['IsTotalPrepublish'])) {
            $model->isTotalPrepublish = $map['IsTotalPrepublish'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['PassedCount'])) {
            $model->passedCount = $map['PassedCount'];
        }

        return $model;
    }
}
