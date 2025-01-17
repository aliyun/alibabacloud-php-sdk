<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetRefreshTaskConfigResponseBody;

use AlibabaCloud\Dara\Model;

class assetRefreshConfig extends Model
{
    /**
     * @var int
     */
    public $refreshConfigType;
    /**
     * @var int
     */
    public $schedulePeriod;
    /**
     * @var int
     */
    public $status;
    /**
     * @var int
     */
    public $vendor;
    protected $_name = [
        'refreshConfigType' => 'RefreshConfigType',
        'schedulePeriod'    => 'SchedulePeriod',
        'status'            => 'Status',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
