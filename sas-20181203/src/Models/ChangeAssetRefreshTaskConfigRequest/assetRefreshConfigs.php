<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ChangeAssetRefreshTaskConfigRequest;

use AlibabaCloud\Tea\Model;

class assetRefreshConfigs extends Model
{
    /**
     * @example 360
     *
     * @var int
     */
    public $schedulePeriod;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
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
     * @return assetRefreshConfigs
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
