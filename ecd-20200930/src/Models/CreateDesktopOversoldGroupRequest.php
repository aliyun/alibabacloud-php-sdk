<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateDesktopOversoldGroupRequest extends Model
{
    /**
     * @var int
     */
    public $concurrenceCount;

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
    public $imageId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $oversoldUserCount;

    /**
     * @var int
     */
    public $oversoldWarn;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var int
     */
    public $stopDuration;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'concurrenceCount'  => 'ConcurrenceCount',
        'dataDiskSize'      => 'DataDiskSize',
        'description'       => 'Description',
        'desktopType'       => 'DesktopType',
        'directoryId'       => 'DirectoryId',
        'imageId'           => 'ImageId',
        'name'              => 'Name',
        'oversoldUserCount' => 'OversoldUserCount',
        'oversoldWarn'      => 'OversoldWarn',
        'period'            => 'Period',
        'periodUnit'        => 'PeriodUnit',
        'policyGroupId'     => 'PolicyGroupId',
        'stopDuration'      => 'StopDuration',
        'systemDiskSize'    => 'SystemDiskSize',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->oversoldUserCount) {
            $res['OversoldUserCount'] = $this->oversoldUserCount;
        }
        if (null !== $this->oversoldWarn) {
            $res['OversoldWarn'] = $this->oversoldWarn;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
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
     * @return CreateDesktopOversoldGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrenceCount'])) {
            $model->concurrenceCount = $map['ConcurrenceCount'];
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OversoldUserCount'])) {
            $model->oversoldUserCount = $map['OversoldUserCount'];
        }
        if (isset($map['OversoldWarn'])) {
            $model->oversoldWarn = $map['OversoldWarn'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
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
