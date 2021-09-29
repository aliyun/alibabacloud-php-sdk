<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionTestsResponseBody\versionTestList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $versionId;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;

    /**
     * @var string
     */
    public $failedCount;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $skippedCount;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $succeededCount;

    /**
     * @var string
     */
    public $deviceGroupName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModify'          => 'GmtModify',
        'versionId'          => 'VersionId',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
        'failedCount'        => 'FailedCount',
        'deviceGroupId'      => 'DeviceGroupId',
        'skippedCount'       => 'SkippedCount',
        'description'        => 'Description',
        'succeededCount'     => 'SucceededCount',
        'deviceGroupName'    => 'DeviceGroupName',
        'gmtCreate'          => 'GmtCreate',
        'name'               => 'Name',
        'id'                 => 'Id',
        'versionType'        => 'VersionType',
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
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->skippedCount) {
            $res['SkippedCount'] = $this->skippedCount;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->succeededCount) {
            $res['SucceededCount'] = $this->succeededCount;
        }
        if (null !== $this->deviceGroupName) {
            $res['DeviceGroupName'] = $this->deviceGroupName;
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
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['SkippedCount'])) {
            $model->skippedCount = $map['SkippedCount'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SucceededCount'])) {
            $model->succeededCount = $map['SucceededCount'];
        }
        if (isset($map['DeviceGroupName'])) {
            $model->deviceGroupName = $map['DeviceGroupName'];
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

        return $model;
    }
}
