<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetRefreshTaskConfigResponseBody;

use AlibabaCloud\Tea\Model;

class assetRefreshConfig extends Model
{
    /**
     * @description The synchronization cycle. Valid values:
     *
     *   **60**: 60 minutes
     *   **180**: 3 hours
     *   **360**: 6 hours
     *   **720**: 12 hours
     *   **1440**: 1 day
     *   **10080**: 7 days
     *
     * @example 360
     *
     * @var int
     */
    public $schedulePeriod;

    /**
     * @description The status of asset synchonization. Valid values:
     *
     *   **1**: enabled
     *   **0**: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The service provider of the cloud asset. Valid values:
     *
     *   **3**: Tencent Cloud
     *   **4**: HUAWEI CLOUD
     *   **7**: Amazon Web Services (AWS) Cloud
     *
     * @example 3
     *
     * @var int
     */
    public $vendor;
    protected $_name = [
        'schedulePeriod' => 'SchedulePeriod',
        'status'         => 'Status',
        'vendor'         => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schedulePeriod) {
            $res['SchedulePeriod'] = $this->schedulePeriod;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assetRefreshConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchedulePeriod'])) {
            $model->schedulePeriod = $map['SchedulePeriod'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
