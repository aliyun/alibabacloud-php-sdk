<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeColdDataBasicInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $backupSetCount;

    /**
     * @var float
     */
    public $backupSetSpaceSize;

    /**
     * @var string
     */
    public $cloudProduct;

    /**
     * @var float
     */
    public $currentSpaceSize;

    /**
     * @var string
     */
    public $dataRedundancyType;

    /**
     * @var bool
     */
    public $enableStatus;

    /**
     * @var int
     */
    public $readAccessNum;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $volumeName;

    /**
     * @var float
     */
    public $writeAccessNum;
    protected $_name = [
        'backupSetCount'     => 'BackupSetCount',
        'backupSetSpaceSize' => 'BackupSetSpaceSize',
        'cloudProduct'       => 'CloudProduct',
        'currentSpaceSize'   => 'CurrentSpaceSize',
        'dataRedundancyType' => 'DataRedundancyType',
        'enableStatus'       => 'EnableStatus',
        'readAccessNum'      => 'ReadAccessNum',
        'regionId'           => 'RegionId',
        'volumeName'         => 'VolumeName',
        'writeAccessNum'     => 'WriteAccessNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupSetCount) {
            $res['BackupSetCount'] = $this->backupSetCount;
        }
        if (null !== $this->backupSetSpaceSize) {
            $res['BackupSetSpaceSize'] = $this->backupSetSpaceSize;
        }
        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }
        if (null !== $this->currentSpaceSize) {
            $res['CurrentSpaceSize'] = $this->currentSpaceSize;
        }
        if (null !== $this->dataRedundancyType) {
            $res['DataRedundancyType'] = $this->dataRedundancyType;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->readAccessNum) {
            $res['ReadAccessNum'] = $this->readAccessNum;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->volumeName) {
            $res['VolumeName'] = $this->volumeName;
        }
        if (null !== $this->writeAccessNum) {
            $res['WriteAccessNum'] = $this->writeAccessNum;
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
        if (isset($map['BackupSetCount'])) {
            $model->backupSetCount = $map['BackupSetCount'];
        }
        if (isset($map['BackupSetSpaceSize'])) {
            $model->backupSetSpaceSize = $map['BackupSetSpaceSize'];
        }
        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }
        if (isset($map['CurrentSpaceSize'])) {
            $model->currentSpaceSize = $map['CurrentSpaceSize'];
        }
        if (isset($map['DataRedundancyType'])) {
            $model->dataRedundancyType = $map['DataRedundancyType'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['ReadAccessNum'])) {
            $model->readAccessNum = $map['ReadAccessNum'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VolumeName'])) {
            $model->volumeName = $map['VolumeName'];
        }
        if (isset($map['WriteAccessNum'])) {
            $model->writeAccessNum = $map['WriteAccessNum'];
        }

        return $model;
    }
}
