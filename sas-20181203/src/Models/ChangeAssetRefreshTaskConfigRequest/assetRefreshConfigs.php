<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeAssetRefreshTaskConfigRequest;

use AlibabaCloud\Tea\Model;

class assetRefreshConfigs extends Model
{
    /**
     * @var int
     */
    public $refreshConfigType;

    /**
     * @description The interval at which assets are synchronized. Unit: minutes. Valid values:
     *
     *   **60**
     *   **180**
     *   **360**
     *   **720**
     *   **1440**
     *   **10080**
     *
     * @example 360
     *
     * @var int
     */
    public $schedulePeriod;

    /**
     * @description The status of the asset synchronization feature. Valid values:
     *
     *   **1**: Asset synchronization is enabled.
     *   **0**: Asset synchronization is disabled.
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $targetId;

    /**
     * @description The service provider of the cloud asset. Valid values:
     *
     *   **3**: Tencent Cloud
     *   **4**: HUAWEI CLOUD
     *   **7**: Amazon Web Services (AWS)
     *
     * @example 3
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'refreshConfigType' => 'RefreshConfigType',
        'schedulePeriod'    => 'SchedulePeriod',
        'status'            => 'Status',
        'targetId'          => 'TargetId',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refreshConfigType) {
            $res['RefreshConfigType'] = $this->refreshConfigType;
        }
        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetRefreshConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefreshConfigType'])) {
            $model->refreshConfigType = $map['RefreshConfigType'];
        }
        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
