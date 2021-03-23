<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindPrepublishesByParentIdResponseBody\prepublishList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $versionType;

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
    public $deviceModelId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $isActive;

    /**
     * @var string
     */
    public $isTotalPrepublish;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'name'               => 'Name',
        'versionType'        => 'VersionType',
        'versionId'          => 'VersionId',
        'barrierCount'       => 'BarrierCount',
        'deviceModelId'      => 'DeviceModelId',
        'parentId'           => 'ParentId',
        'isActive'           => 'IsActive',
        'isTotalPrepublish'  => 'IsTotalPrepublish',
        'gmtCreate'          => 'GmtCreate',
        'gmtModify'          => 'GmtModify',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->barrierCount) {
            $res['BarrierCount'] = $this->barrierCount;
        }
        if (null !== $this->deviceModelId) {
            $res['DeviceModelId'] = $this->deviceModelId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->isActive) {
            $res['IsActive'] = $this->isActive;
        }
        if (null !== $this->isTotalPrepublish) {
            $res['IsTotalPrepublish'] = $this->isTotalPrepublish;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['BarrierCount'])) {
            $model->barrierCount = $map['BarrierCount'];
        }
        if (isset($map['DeviceModelId'])) {
            $model->deviceModelId = $map['DeviceModelId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['IsActive'])) {
            $model->isActive = $map['IsActive'];
        }
        if (isset($map['IsTotalPrepublish'])) {
            $model->isTotalPrepublish = $map['IsTotalPrepublish'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }

        return $model;
    }
}
