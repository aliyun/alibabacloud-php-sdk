<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateAgentlessScanTaskRequest extends Model
{
    /**
     * @description Identification of asset selection.
     *
     * @example AGENTLESS_SCAN_ONCE_TASK_1720145******
     *
     * @var string
     */
    public $assetSelectionType;

    /**
     * @description The retention period of images. Unit: days.
     *
     * @example 1
     *
     * @var int
     */
    public $autoDeleteDays;

    /**
     * @description Specifies whether to enable the cost-saving mode. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $releaseAfterScan;

    /**
     * @description Specifies whether to check data disks. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $scanDataDisk;

    /**
     * @description The type of the detection object. Valid values:
     *
     *   **2**: image
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $targetType;

    /**
     * @description The UUIDs of the assets on which you want to run the detection task.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'assetSelectionType' => 'AssetSelectionType',
        'autoDeleteDays'     => 'AutoDeleteDays',
        'releaseAfterScan'   => 'ReleaseAfterScan',
        'scanDataDisk'       => 'ScanDataDisk',
        'targetType'         => 'TargetType',
        'uuidList'           => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetSelectionType) {
            $res['AssetSelectionType'] = $this->assetSelectionType;
        }
        if (null !== $this->autoDeleteDays) {
            $res['AutoDeleteDays'] = $this->autoDeleteDays;
        }
        if (null !== $this->releaseAfterScan) {
            $res['ReleaseAfterScan'] = $this->releaseAfterScan;
        }
        if (null !== $this->scanDataDisk) {
            $res['ScanDataDisk'] = $this->scanDataDisk;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgentlessScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetSelectionType'])) {
            $model->assetSelectionType = $map['AssetSelectionType'];
        }
        if (isset($map['AutoDeleteDays'])) {
            $model->autoDeleteDays = $map['AutoDeleteDays'];
        }
        if (isset($map['ReleaseAfterScan'])) {
            $model->releaseAfterScan = $map['ReleaseAfterScan'];
        }
        if (isset($map['ScanDataDisk'])) {
            $model->scanDataDisk = $map['ScanDataDisk'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
