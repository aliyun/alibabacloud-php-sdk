<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopOversoldGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $concurrenceCount;

    /**
     * @var int
     */
    public $curConcurrenceCount;

    /**
     * @var int
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $desktopType;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $oversoldGroupId;

    /**
     * @var int
     */
    public $oversoldUserCount;

    /**
     * @var int
     */
    public $oversoldWarn;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $saleStatus;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $stopDuration;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'concurrenceCount'    => 'ConcurrenceCount',
        'curConcurrenceCount' => 'CurConcurrenceCount',
        'dataDiskSize'        => 'DataDiskSize',
        'description'         => 'Description',
        'desktopType'         => 'DesktopType',
        'directoryId'         => 'DirectoryId',
        'expireTime'          => 'ExpireTime',
        'imageId'             => 'ImageId',
        'name'                => 'Name',
        'oversoldGroupId'     => 'OversoldGroupId',
        'oversoldUserCount'   => 'OversoldUserCount',
        'oversoldWarn'        => 'OversoldWarn',
        'policyGroupId'       => 'PolicyGroupId',
        'saleStatus'          => 'SaleStatus',
        'status'              => 'Status',
        'stopDuration'        => 'StopDuration',
        'systemDiskSize'      => 'SystemDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrenceCount) {
            $res['ConcurrenceCount'] = $this->concurrenceCount;
        }
        if (null !== $this->curConcurrenceCount) {
            $res['CurConcurrenceCount'] = $this->curConcurrenceCount;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->desktopType) {
            $res['DesktopType'] = $this->desktopType;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oversoldGroupId) {
            $res['OversoldGroupId'] = $this->oversoldGroupId;
        }
        if (null !== $this->oversoldUserCount) {
            $res['OversoldUserCount'] = $this->oversoldUserCount;
        }
        if (null !== $this->oversoldWarn) {
            $res['OversoldWarn'] = $this->oversoldWarn;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->saleStatus) {
            $res['SaleStatus'] = $this->saleStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->stopDuration) {
            $res['StopDuration'] = $this->stopDuration;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrenceCount'])) {
            $model->concurrenceCount = $map['ConcurrenceCount'];
        }
        if (isset($map['CurConcurrenceCount'])) {
            $model->curConcurrenceCount = $map['CurConcurrenceCount'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DesktopType'])) {
            $model->desktopType = $map['DesktopType'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OversoldGroupId'])) {
            $model->oversoldGroupId = $map['OversoldGroupId'];
        }
        if (isset($map['OversoldUserCount'])) {
            $model->oversoldUserCount = $map['OversoldUserCount'];
        }
        if (isset($map['OversoldWarn'])) {
            $model->oversoldWarn = $map['OversoldWarn'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['SaleStatus'])) {
            $model->saleStatus = $map['SaleStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StopDuration'])) {
            $model->stopDuration = $map['StopDuration'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
